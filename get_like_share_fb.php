<!-- https://graph.facebook.com/?fields=og_object%7Blikes.summary(total_count).limit(0)%7D%2Cshare&id=https://saostar.vn/giai-tri/the-gioi-sao/hau-truong/phan-anh-toi-luon-danh-cho-anh-sam-su-tran-trong-cua-mot-bac-tien-boi-1919249.html
 -->
<?php
// $url_get_like_share = 'https://graph.facebook.com/?fields=og_object%7Blikes.summary(total_count).limit(0)%7D%2Cshare&id=https%3A%2F%2Fwww.saostar.vn';
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://graph.facebook.com/?fields=og_object%7Blikes.summary(total_count).limit(0)%7D%2Cshare&id=https://saostar.vn/giai-tri/the-gioi-sao/hau-truong/phan-anh-toi-luon-danh-cho-anh-sam-su-tran-trong-cua-mot-bac-tien-boi-1919249.html',
));

echo $result = curl_exec($curl);
?>

<!-- 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "like_share_fb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO fb_likes_shares (url, likes, shares)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?> -->