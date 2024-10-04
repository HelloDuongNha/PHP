<?php
// explode
$string = "apple,banana,orange";
$fruits = explode(",", $string);
// echo $fruits; //it will show a warning/error when u try to print an array while echo and print can only print a simple text
print_r($fruits);  // Output: Array ( [0] => apple [1] => banana [2] => orange )
echo '<br>';

// implode
$fruits = ["apple", "banana", "orange"];
$string = implode(", ", $fruits);
echo $string;  // Output: apple, banana, orange


$fruits = ["apple", "banana", "orange"];
print_r($fruits);  // Outputs array structure directly

// If you want to capture the output in a string:
$output = print_r($fruits, true);
echo "<pre>$output</pre>";  // Use <pre> to maintain formatting


// set True to print_r to save it to another variable
$array = array('apple', 'banana', 'cherry');
// Sử dụng print_r với tham số là true để lưu kết quả vào biến, lưu theo dưới dạng chuỗi real
$output = print_r($array, true);

// Bây giờ $output chứa chuỗi kết quả, bạn có thể sử dụng nó như bất kỳ chuỗi nào khác
echo "Kết quả lưu trong biến:\n";
echo $output;

echo '<br>';


// set false to print_r to display immediately, but can not save it to another variable
$array = array('apple', 'banana', 'cherry');
// Sử dụng print_r với tham số là false (hoặc không truyền tham số)
$output = print_r($array, false);
echo $output; // nó chỉ vẽ cái print_r ra thôi chứ cái output không lưu đúng kiểu giữ liệu là chuỗi
print_r($array);

