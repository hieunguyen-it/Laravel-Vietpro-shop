<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id'); // int, auto, increment, unsigned
            $table->string('code',50)->unique(); // không cho phép cột mã sản phẩm trùng
            $table->string('name');
            $table->string('slug');
            $table->decimal('price',18,0)->default(0); // mặc định 0 nếu là không có giá trị nếu không ghi gì
            $table->tinyInteger('featured')->unsigned();// kiểu không dấu
            $table->tinyInteger('state')->unsigned();// kiểu không dấu
            $table->text('info')->nullable(); // cho phép null
            $table->text('decribe')->nullable();
            $table->string('img');

            // Tạo khóa ngoại liên kết đến khóa chính của bảng category
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');

            // Tạo 2 cột created_at, update_at kiểu timestamp cho phép null
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
