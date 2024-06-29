<?php
class db {
    protected $conn;
    public $last_id;

    function __construct() {
        $servername = "localhost";  // Tên máy chủ MySQL (thường là localhost nếu chạy local)
        $username = "root"; // Tên người dùng MySQL
        $password = ""; // Mật khẩu MySQL
        $database = "jewelryweb"; 
        $this->conn = new mysqli($servername, $username, $password, $database);

        if ($this->conn->connect_error) {
            die("Kết nối đến MySQL thất bại: " . $this->conn->connect_error);
        }
    }

    /**
     * Thực hiện một truy vấn SQL và trả về kết quả.
     *
     * @param string $sql Truy vấn SQL.
     * @return mixed Kết quả truy vấn hoặc FALSE nếu thất bại.
     */
    function querySQL($sql) {    
        $result = $this->conn->query($sql);

        if ($result === FALSE) {
            // Xử lý lỗi hoặc ghi log
            echo "Lỗi truy vấn: " . $this->conn->error;
        }else
        {
            $this->last_id = $this->conn->insert_id;
        }

        return $result;
    }

    /**
     * Lấy tất cả kết quả từ một truy vấn SELECT.
     *
     * @param string $sql Truy vấn SELECT.
     * @return array Mảng các kết quả hoặc NULL nếu thất bại.
     */
    function getResults($sql) {
        $result = $this->querySQL($sql);

        if ($result === FALSE) {
            return NULL;
        }

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    function __destruct() {
        $this->conn->close();
    }
}
?>
