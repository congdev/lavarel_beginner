# lavarel_beginner

sudo tasksel install lamp-server
Restart apache
sudo service apache2 restart

* Bước đầu tiên, sử dụng lệnh sau để cài đặt phpMyAdmin:
sudo apt-get install phpmyadmin
* Việc cài đặt phpMyAdmin diễn ra khá lâu. Trong qúa trình cài đặt, hệ thống sẽ hỏi chúng ta chọn web server nào được tự động cấu hình khi chạy phpMyAdmin. Lúc này các bạn chọn apache2 rồi nhấn Enter nhé.
* Sau đó, hệ thống sẽ yêu cầu tạo mật khẩu cho phpMyAdmin thì các bạn cứ dùng mật khẩu đã tạo ở bước cài đặt MySQL luôn nhé.
* Mở file /etc/apache2/apache2.conf thêm dòng này vào cuối file:
Include /etc/phpmyadmin/apache.conf
* Cuối cùng, khởi động lại Apache bằng lệnh:
sudo service apache2 restart
Mở trình duyệt, vào địa chỉ localhost://phpmyadmin, phpMyadmin sẽ yêu cầu nhập tài khoản và mật khẩu thì các bạn nhập root và mật khẩu mà bạn đã tạo ở phần cài đặt nhé.

OK, việc cài đặt LAMP trên Ubuntu đến đây đã hoàn tất!


