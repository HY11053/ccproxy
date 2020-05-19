<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brandarticles', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('typeid')->index();
            $table->integer('ismake')->index();
            $table->integer('click')->index();
            $table->string('title')->index();
            $table->string('shorttitle')->nullable();
            $table->string('flags')->nullable();
            $table->string('tags')->nullable();
            $table->integer('mid')->index();//文档类型
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('write')->index();
            $table->string('litpic')->nullable();
            $table->smallInteger('dutyadmin')->index();
            $table->text('body')->nullable();
            $table->string('brandname')->nullable()->index();//品牌名称
            $table->string('brandtime')->nullable();//成立时间
            $table->string('brandorigin')->nullable()->index();//品牌发源地
            $table->string('brandnum')->nullable()->index();//门店总数
            $table->string('brandpay')->nullable()->index();//加盟费用
            $table->string('brandarea')->nullable()->index();//加盟区域
            $table->string('brandmap')->nullable();//经营范围
            $table->string('brandperson')->nullable();//加盟人群
            $table->string('brandattch')->nullable();//加盟意向人数
            $table->string('brandapply')->nullable();//申请加盟人数
            $table->string('brandchat')->nullable();//项目咨询人数
            $table->string('brandgroup')->nullable();//公司名称
            $table->string('brandaddr')->nullable();//公司地址
            $table->string('brandduty')->nullable();//区域授权
            $table->mediumText('imagepics')->nullable();//品牌图集
            $table->string('acreage')->nullable();//所需面积
            $table->string('genre')->nullable();//公司性质
            $table->string('licenseno')->nullable();//特许加盟许可证号
            $table->string('registeredcapital')->nullable();//注册资金
            $table->integer('tzid')->nullable()->index();
            $table->string('ppjstitle')->nullable();//品牌介绍标题
            $table->string('url')->unique()->index();
            $table->string('editor')->nullable()->index();
            $table->integer('editor_id')->default(0)->index();
            $table->timestamp('received_at')->nullable()->index();
            $table->integer('isedit')->default(0)->index();
            $table->string('indexpic')->nullable();
            $table->integer('ispush')->default(0)->index();
            $table->timestamp('published_at')->nullable();//预选发布时间
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
        Schema::dropIfExists('brandarticles');
    }
}
