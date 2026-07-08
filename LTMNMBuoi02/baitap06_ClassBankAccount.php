<?php
session_start();

class BankAccount
{
    public $soTK;
    public $tenCTK;
    public $soDu;

    public function __construct($soTK, $tenCTK, $soDu)
    {
        $this->soTK = $soTK;
        $this->tenCTK = $tenCTK;
        $this->soDu = $soDu;
    }

    public function napTien($soTien)
    {
        $this->soDu += $soTien;
        echo "Nạp thành công $soTien đồng.<br>";
    }

    public function rutTien($soTien)
    {
        if($soTien <= $this->soDu)
        {
            $this->soDu -= $soTien;
            echo "Rút thành công $soTien đồng.<br>";
        }
        else
        {
            echo "Không đủ số dư!<br>";
        }
    }

    public function hienThi()
    {
        echo "<hr>";
        echo "Số tài khoản: $this->soTK <br>";
        echo "Tên chủ tài khoản: $this->tenCTK <br>";
        echo "Số dư: $this->soDu đồng <br>";
    }
}

// neu chua co tai khoan trong session thi tao moi
if(!isset($_SESSION["taikhoan"]))
{
    $_SESSION["taikhoan"] = new BankAccount(
        "1026095979",
        "NGUYEN THI MINH THU",
        1000000
    );
}

//lay doi tuong tu session
$tk = $_SESSION["taikhoan"];

//xu ly khi nhan nut
if(isset($_POST["chon"]))
{
    $chon = $_POST["chon"];
    $tien = isset($_POST["tien"]) ? $_POST["tien"] : 0;

    if($chon == "nap")
    {
        $tk->napTien($tien);
    }
    elseif($chon == "rut")
    {
        $tk->rutTien($tien);
    }
    elseif($chon == "hienthi")
    {
        echo "Hiển thị số dư:<br>";
    }

    //luu lai doi tuong vao session
    $_SESSION["taikhoan"] = $tk;

    //hien thi thong tin
    $tk->hienThi();
}
?>
<head>
    <title>Quản lý tài khoản</title>
</head>
<form method="post">
    <label>Chọn chức năng:</label>
    <select name="chon">
        <option value="nap">Nạp tiền</option>
        <option value="rut">Rút tiền</option>
        <option value="hienthi">Hiển thị số dư</option>
    </select>
    <br><br>
    Nhập số tiền:
    <input type="number" name="tien">
    <br><br>
    <input type="submit" value="Thực hiện">
</form>