<?php
// 設定資料庫時間與時區
date_default_timezone_set("Asia/Taipei");
// 啟動session讓session可以使用。
session_start();

// 寫一個物件，可以輸出陣列資料可以用來輸出陣列與其他輸出資料。
function dd($array){
    echo "<per>";
    print_r($array);
    echo "</per>";
};
// 這個物件可以把用戶導向，特定網頁。
function to($url){
    header("location",$url);
}
// 宣告一個class叫做db可以拿來存取資料庫。
class db
{
    // 宣告一個私人的數值，為$dns=資料庫為本地端，字體為utf8，資料庫名稱為fish01
    private $dns ="mysql:host=localhost;charset=utf8;dbname=fish01";
    // 資料庫帳號。
    private $root ="root";
    // 資料庫密碼。
    private $password = "";
    // 資料庫內的哪個表單。
    private $table;
    // 資料庫連結資料放置處
    private $pdo;

    // 這段是宣告啟動class時自動啟動，所以宣告時class時也必須將$table帶入。
    public function __construct($table)
    {
        // 裡面宣告的private $table=外部輸入的$table
        $this->table=$table;
        // 宣告連連結資料庫。
        $this->pdo=new PDO($this->dns,$this->root,$this->password);
    }
    public function arrayToSqlarray($array)
    {
        // 將陣列拆開，並組成新的陣列，"`$key`='$val'"，並將他塞入$tmp[]中。
        foreach($array as $key => $val){
            $tmp[]="`$key`='$val'";
        }
        return $tmp;
    }
    // 顯示全部資料的寫法。...$arg=要輸入不輸入都可以。
    public function all(...$arg){
        // 先宣告$SQL語法全部輸出的寫法。
        $sql="SELECT * FROM $this->table";
        // 如果$arg[0]不存在就輸出全部資料。
        if(empty($arg[0])){
            $sql="SELECT * FROM $this->table";
        }else{
            // 如果存在就進行下列程式碼，將陣列拆解，並且用join進行重組。
            $tmp=$this->arrayToSqlarray($arg[0]);
            $sql=$sql." where ".join(" && ",$tmp);
        };
        // 如果數值存在就接在後面。
        if(!empty($arg[1])){
            $sql=$sql.$arg[1];
        }
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function del($id){
        $sql="DELETE FROM `$this->table` WHERE ";
        if(is_array($id)){
            $tmp=$this->arrayToSqlarray($id);
            $sql=$sql.join(" && ",$tmp);
        }else{
            $sql=$sql."`id` = '$id' ";
        }
        return $this->pdo->exec($sql);
    }
    public function insert()

}
// 宣告要連結的資料庫表單名稱。
$user=new db("username");
dd($user->all(["user"=>"test","password"=>"test"]));
?>