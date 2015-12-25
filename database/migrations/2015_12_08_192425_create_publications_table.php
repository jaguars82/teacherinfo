<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publications', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('user_id');
                        $table->string('subjects');         //id(ies) of subcects
                        $table->text('keywords');
                        $table->string('prefix');           //prefix (before title)
                        $table->string('title');
                        $table->text('description');
                        $table->boolean('bodytype')->default('1');    //1 - html; 2 - file;
                        $table->text('body');
                        $table->string('mediafile');        //filename
                        $table->string('mediatype');        //type of file (category: video, text, presentation etc.)
                        $table->boolean('appendix_status')->default('0'); //0 - no appendix; 1 - appendix exists
                        $table->text('apendix_files'); //array with appendix filenames
                        $table->dateTime('uploaded_at');
                        $table->integer('moderator_id');
                        $table->text('moderator_comment');
                        $table->dateTime('moderation_date');
                        $table->boolean('pay_status')->default('1');  //1 - not_payed; 2 - payed; 3 - premium
                        $table->boolean('status')->default('1');  //1 - downloaded; 2 - active; 3 - blocked
                        $table->string('cert_background'); //name of image file used as background for certificate
                        $table->integer('downloads'); //amount of downloads
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
		Schema::drop('publications');
	}

}
