
# Upload File Picture

## Tạo project Laravel

- mở cửa sổ cmd: chạy lệnh composer create-project --prefer-dist laravel/laravel blog 'tên của project là blog bạn có thể thay đổi' 

## Liên kết với cơ sở dử liệu 
	
- trong file .env đến hàng 12 'DB_DATABASE=laravel' thây tên laravel bằng tên database của bạn
	+ lưu ý 'tắc cmd và chạy lại sau khi liên kết với database'

## Tạo table photos để lưu ảnh

- mở cmd trong project và chạy lệnh php artisan make:migration create_table_table
 	+ file được tạo ở database\migration\ 
	+ Tạo các cột cho table trong functio up
	+ ví dụ: 
	public function up() {
		Schema::create('photos', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('image');
			$table->timestamps();
		});
	}

## link folder store với folder public để lưu hình ảnh

- vào confing/filesystems.php  đến cuối file trong: 
		'links' => [
				public_path('storage') => storage_path('app/public'),
			],
		xóa bỏ phần /public
- vào lại cmd chạy lệnh php artisan storage:link

## Tạo file UploadFileController trong Folder Controller

- chạy lệnh php artisan serve make:controller UploadFileController trong cửa sổ cmd để tạo file
	+ file được tạo ở app/Http/Controller/UploadFileController.php
	+ Tạo các function để thực thiện chức năng upload photo như index(), create(), store(),...

	+ trong function  store(Request $request)
		* dùng câu lệnh $image = $request->file('photo')->store("public"); để lấy hình ảnh ở thẻ photo và lưu vào serve với seerve là Xampp
	+ lưu ý trong form upload hình ảnh cần có csrf và có enctype="multipart/form-data để lấy hình ảnh


## Cách hiển thị hình ảnh ra màng hình

- dùng cặp thẻ img  : img src="/storage/Tên ảnh trong Database" alt="" height="100px" width="100px"






