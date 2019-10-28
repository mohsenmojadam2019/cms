<?php
include_once("cms.class.php");

class PageData extends Cms{

    public function __construct($l=1, $curentPage=""){
        if(!parent::_connectDB())
            die();
        parent::__construct($l);
        $this->curentPage = $curentPage;
    }

    static public function isEmail($email){
        $email = substr( $email, 0, 256 );
        return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? true : false;
    }

    public function check_length( $str, $minlength ){
        if( strlen( $str ) >= $minlength ) return true;
        else return false;
    }

    public function get_menu($parent=0){

        if( !is_numeric($parent) ) $parent = 0;

        $menus = $this->db->select("menu", '*',
            ['parent' => $parent]
        );
        return $menus;
    }

    public function get_cats($parent = 0){

        $cats = $this->db->select("categories", '*',
            ['parent' => $parent]
        );
        return $cats;

    }

    public function build_cats($parent=0){

        $cats = $this->get_cats($parent);
        $html = '';
        if( count($cats) ){

            if( $parent == 0 ) $html = '<ul class="cats">';
            else $html = '<ul class="cats_childs">';

            foreach( $cats as $cat ){

                $childs_cats = $this->build_cats( $cat['id'] );

                $html .= '<li><a '.($childs_cats ==''?'':' class="parent-cat"').' href="./?m=shop&cat='.$cat['id'].'">'.$cat['title'].'</a>';

                $html .= $childs_cats;

                $html .= '</li>';

            }
            $html .= '</ul>';

        }

        return $html;

    }

    public function products_count($cat=0){
        /*
        if( $cat ) $query = "select count(*) from cms_products where cat = $cat";
        else $query = "select count(*) from cms_products";
        $data = $this->db->query($query)->fetchAll();
         */

        if( $cat ) $count = $this->db->count("products", ["cat" => $cat ]);
        else $count = $this->db->count("products");

        return $count;
    }

    public function get_products($start=0,$limit=12,$cat=0){

        if( $cat ) $products = $this->db->select("products", '*', ['cat' => $cat, 'LIMIT' => [$start,$limit], 'ORDER' => ['id'=>'DESC'] ] );
        else $products = $this->db->select("products", '*', ['LIMIT' => [$start,$limit], 'ORDER' => ['id'=>'DESC'] ] );

        return $products;

    }

    public function search_forms(){

        if( isset( $_POST['action'] ) ){

            if( $_POST['action'] == 'search' ){

                if( isset( $_POST['key'] ) ){

                    $key = $_POST['key'];
                    $result = $this->db->select("products", '*', ['title[~]' => $key] );
                    return $result;

                }else return -3;

            }elseif( $_POST['action'] == 'register' ){

                if( isset( $_POST['mail'] ) && isset( $_POST['pass'] ) && isset( $_POST['name'] ) && isset( $_POST['family'] ) && isset( $_POST['cell'] ) && isset( $_POST['address'] ) ){

                    if( !$this->isEmail($_POST['mail']) ) return false;
                    if( !$this->check_length($_POST['pass'], 8) ) return false;

                    //=========[Random]==========
                    $hash = "";
                    $possible = "0123456789bcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; //no vowels
                    $i = 0;
                    while ($i < 10) {
                        $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
                        if (!strstr($random_name, $char)) {
                            $hash .= $char;
                            $i++;
                        }
                    }
                    //=========[/Random]=========

                    $this->db->insert("users", [
                        "name" => $_POST['name'],
                        "family" => $_POST['family'],
                        "mail" => $_POST['mail'],
                        "pass" => $_POST['pass'],
                        "cell" => $_POST['cell'],
                        "address" => $_POST['address'],
                        "hash" => $hash
                    ]);
//آخرین آیدی را برای ما برمی گرداند
                    $id = $this->db->id();

                    $headers = "Reply-To: \"Behsaz CMS\" <auto-reply@".$_SERVER["SERVER_NAME"].">\r\n";
                    $headers .= "Return-Path: \"Behsaz CMS\" <auto-reply@".$_SERVER["SERVER_NAME"].">\r\n";
                    $headers .= "From: \"Behsaz CMS\" <auto-reply@".$_SERVER["SERVER_NAME"].">\r\n";
                    $headers .= 'X-Mailer: PHP/' . phpversion().">\r\n";
                    $headers .= "Organization: Behsaz CMS \r\n";
                    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
                    $message = 'سلام '.$_POST['name'].'<br/>برای تکمیل ثبت نام روی لینک زیر کلیک کنید<br/> <a href="'.URL.'?m=confirm&i='.$id.'&h='.$hash.'">تکمیل ثبت نام</a> ';
                    $sent = @mail($_POST['mail'], 'Confirm your registration', $message, $headers);

                    if( $sent ) return true;

                }

            }elseif( $_POST['action'] == 'login' ){

                //validation

                $user = $this->db->select("users", '*', [
                    'mail' => $_POST['mail'],
                    'active' => 1
                ] );

                if( count($user) ){
                    //strcmp( $_POST['pass'], $user[0]['pass'] );
                    if( $_POST['pass'] == $user[0]['pass'] ){

                        $_SESSION['NET_COLLEGE'] = 1;
                        $_SESSION['NET_COLLEGE_USER'] = $user[0]['name'];
                        $_SESSION['NET_COLLEGE_ID'] = $user[0]['id'];

                        return true;

                    }else return false;

                }else return false;

            }else return -2;

        }else return -1;

    }

    public function confirm($i,$h){

        //validation
        $user = $this->db->select("users", '*', [
            'id' => $i,
            'active' => 0,
            'hash' => $h
        ] );

        if( count( $user ) ){

            $this->db->update("users", [
                "active" => 1
            ], [
                "id" => $i
            ]);

            return true;

        }else return false;

    }

    public function chop_str( $str, $length=100 ){

        if (strlen($str) < $length)
            return $str;
        $str = mb_substr($str,0,$length);
        if ($spc_pos = strrpos($str," "))
            $str = mb_substr($str,0,$spc_pos);
        return $str . "...";

    }

    public function get_product($id=1){

        if( !is_numeric($id) ) $id = 1;
        $result = $this->db->select("products", '*', ['id' => $id] );
        return $result;

    }

}

?>