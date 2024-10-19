<!DOCTYPE HTML>
<html>
<head>
	<style>
		.error {color: #FF0000;} /* Định nghĩa màu đỏ cho thông báo lỗi */
	</style>
</head>
<body>

<?php
// Định nghĩa biến và gán giá trị rỗng
$nameErr = $emailErr = $genderErr = $websiteErr = ""; // Các biến để lưu thông báo lỗi
$name = $email = $gender = $comment = $website = ""; // Các biến để lưu giá trị của form

// Kiểm tra xem form đã được gửi (phương thức POST) chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Kiểm tra tên
	if (empty($_POST["name"])) {
		$nameErr = "Name is required"; // Thông báo lỗi nếu không nhập tên
	} else {
		$name = test_input($_POST["name"]); // Gọi hàm test_input để xử lý dữ liệu
		// Kiểm tra xem tên chỉ chứa chữ cái và khoảng trắng
		if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
			$nameErr = "Only letters and white space allowed"; // Thông báo lỗi nếu không hợp lệ
		}
	}
	
	// Kiểm tra email
	if (empty($_POST["email"])) {
		$emailErr = "Email is required"; // Thông báo lỗi nếu không nhập email
	} else {
		$email = test_input($_POST["email"]); // Gọi hàm test_input để xử lý dữ liệu
		// Kiểm tra định dạng email
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format"; // Thông báo lỗi nếu không hợp lệ
		}
	}
		
	// Kiểm tra website
	if (empty($_POST["website"])) {
		$website = ""; // Nếu không nhập thì để rỗng
	} else {
		$website = test_input($_POST["website"]); // Gọi hàm test_input để xử lý dữ liệu
		// Kiểm tra định dạng URL
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
			$websiteErr = "Invalid URL"; // Thông báo lỗi nếu không hợp lệ
		}	
	}

	// Kiểm tra comment
	if (empty($_POST["comment"])) {
		$comment = ""; // Nếu không nhập thì để rỗng
	} else {
		$comment = test_input($_POST["comment"]); // Gọi hàm test_input để xử lý dữ liệu
	}

	// Kiểm tra giới tính
	if (empty($_POST["gender"])) {
		$genderErr = "Gender is required"; // Thông báo lỗi nếu không chọn giới tính
	} else {
		$gender = test_input($_POST["gender"]); // Gọi hàm test_input để xử lý dữ liệu
	}
}

// Hàm để xử lý dữ liệu nhập vào
function test_input($data) {
	$data = trim($data); // Loại bỏ khoảng trắng ở đầu và cuối
	$data = stripslashes($data); // Xóa ký tự escape
	$data = htmlspecialchars($data); // Chuyển đổi các ký tự đặc biệt thành HTML entities
	return $data; // Trả về dữ liệu đã xử lý
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <!-- Xử lý form gửi đến chính nó -->
	Name: <input type="text" name="name" value="<?php echo $name;?>"> <!-- Giữ lại giá trị đã nhập -->
	<span class="error">* <?php echo $nameErr;?></span> <!-- Hiển thị thông báo lỗi nếu có -->
	<br><br>
	E-mail: <input type="text" name="email" value="<?php echo $email;?>"> <!-- Giữ lại giá trị đã nhập -->
	<span class="error">* <?php echo $emailErr;?></span> <!-- Hiển thị thông báo lỗi nếu có -->
	<br><br>
	Website: <input type="text" name="website" value="<?php echo $website;?>"> <!-- Giữ lại giá trị đã nhập -->
	<span class="error"><?php echo $websiteErr;?></span> <!-- Hiển thị thông báo lỗi nếu có -->
	<br><br>
	Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea> <!-- Giữ lại giá trị đã nhập -->
	<br><br>
	Gender: <!-- Nhóm lựa chọn giới tính -->
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female <!-- Kiểm tra xem đã chọn giới tính chưa -->
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
	<span class="error">* <?php echo $genderErr;?></span> <!-- Hiển thị thông báo lỗi nếu có -->
	<br><br>
	<input type="submit" name="submit" value="Submit">  <!-- Nút gửi form -->
</form>

<?php
// Hiển thị dữ liệu người dùng đã nhập
echo "<h2>Your Input:</h2>";
echo $name; // Hiển thị tên
echo "<br>";
echo $email; // Hiển thị email
echo "<br>";
echo $website; // Hiển thị website
echo "<br>";
echo $comment; // Hiển thị comment
echo "<br>";
echo $gender; // Hiển thị giới tính
?>

</body>
</html>
