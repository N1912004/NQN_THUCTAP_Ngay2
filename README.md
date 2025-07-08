Nguyễn Quốc Nghi_BÁO CÁO HÀNG NGÀY – Ngày 2
Hôm qua:
-Cải thiện chức năng kết nối CSDL bằng PDO: thêm xử lý lỗi try-catch, định nghĩa hằng số kết nối.
-Cải thiện chức năng hiển thị danh sách feedback: dùng prepare() để chống SQL Injection, áp dụng giao diện Bootstrap rõ ràng hơn.
-Kiểm tra dữ liệu an toàn với ?? và FETCH_ASSOC, thêm thông báo lỗi chi tiết khi query thất bại.
Hôm nay:
-Sửa lỗi không truyền được dữ liệu PHP vào giao diện Smarty do thiếu khởi tạo biến $ten, $diem.
-Sửa lỗi không tìm thấy file welcome.tpl do sai đường dẫn template.
-Sửa tên biến viết sai $marty → đúng là $smarty, và thuộc tính leftime → đúng là cache_lifetime.
-Thiết lập cấu hình đầy đủ cho Smarty (templateDir, compileDir, cacheDir, configDir).
-Gán dữ liệu vào giao diện với assign() và in ra trong file .tpl bằng cú pháp {$ten}, {$diem}.
-Kích hoạt cơ chế cache của Smarty và thiết lập thời gian cache_lifetime = 120.
Sự cố:
-Không tìm thấy biến $ten, $diem dẫn đến cảnh báo Undefined variable.
-Không hiển thị giao diện vì Smarty không load được file welcome.tpl.
-Dùng sai đường dẫn tuyệt đối (/templates/) khiến Smarty không nhận đúng thư mục template.
-Sai tên biến ($marty) và sai thuộc tính (leftime) làm code không chạy được

