<?php
require_once 'ket_noi.php';

function getAll() {
    $conn = getConnection();
    $sql = "SELECT * FROM khach_hang";

    /*
     * $conn->prepare($param1)
     * @param1: string - câu lệnh truy vấn
     * @result: Statement - đối tượng giúp thực hiện truy vấn
     */
    $statement = $conn->prepare($sql);

    /*
     * execute($param1): thực thi truy vấn
     * @param1: array - tham số truyền vào cho câu truy vấn
     */
    $statement->execute([]);
    $kq = [];
    while(true) {
        /*
         * $statement->fetch(): Đọc dòng dữ liệu tiếp theo
         * @return: trả về giá trị dòng kế tiếp nếu có. Nếu ko -> trả về false
         */
        $rowData = $statement->fetch();
        if ($rowData == false) {
            break;
        }

        $row = [
            'id' => $rowData['id'],
            'ma' => $rowData['ma'],
            'ten' => $rowData['ten'],
            'email' => $rowData['email'],
            'sdt' => $rowData['sdt'],
            'dia_chi' => $rowData['dia_chi'],
            'gioi_tinh' => $rowData['gioi_tinh'],
        ];

        array_push($kq, $row);
    }

    return $kq;
}

function insert(array $data) {
    $conn = getConnection();

    $sql = "INSERT INTO khach_hang(ma, ten, email, sdt, dia_chi, gioi_tinh) " .
        " VALUES(:ma, :ten, :email, :sdt, :dia_chi, :gioi_tinh)";

    $statement = $conn->prepare($sql);

    $statement->execute($data);
}

function findById(int $id) {
    $sql = "SELECT * FROM khach_hang WHERE id = :id";
}

function update(array $data) {
    $sql = "UPDATE khach_hang SET ma = :ma, ten = :ten, " .
        " email = :email, sdt = :sdt, dia_chi = :dia_chi, gioi_tinh = :gioi_tinh " .
        " WHERE id = :id";
}

function deleteById(int $id) {
    $sql = "DELETE FROM khach_hang WHERE id = :id";
}
