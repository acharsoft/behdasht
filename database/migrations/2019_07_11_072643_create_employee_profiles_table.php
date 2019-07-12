<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            //مشخصات فردی شاغل
            $table->string('efullname')->nullable();
            $table->string('efathername')->nullable();
            $table->boolean('esex_male')->default(0);
            $table->boolean('esex_female')->default(0);
            $table->boolean('emaritalstatus_married')->default(0);
            $table->boolean('emaritalstatus_single')->default(0);
            $table->integer('echildnumber')->default(0);
            $table->integer('ebirthday')->nullable();
            $table->bigInteger('enationalcode')->nullable();
            $table->boolean('emilitaryservicestatus')->default(0);
            $table->string('eservicegategory')->nullable();
            $table->boolean('emedicalexemotion')->default(0);
            $table->string('emedicalexemotionreason')->nullable();
            $table->text('eaddress')->nullable();
            //سوابق شغلی
            $table->string('wcurrentjobs_title1')->nullable();
            $table->string('wcurrentjobs_title2')->nullable();
            $table->string('wcurrentjobs_assignedduty1')->nullable();
            $table->string('wcurrentjobs_assignedduty2')->nullable();
            $table->date('wcurrentjobs_employmenthistory_from1')->nullable();
            $table->date('wcurrentjobs_employmenthistory_to1')->nullable();
            $table->date('wcurrentjobs_employmenthistory_from2')->nullable();
            $table->date('wcurrentjobs_employmenthistory_to2')->nullable();
            $table->string('wcurrentjobs_jobchangereason1')->nullable();
            $table->string('wcurrentjobs_jobchangereason2')->nullable();
            $table->string('wpreviousjobs_title1')->nullable();
            $table->string('wpreviousjobs_title2')->nullable();
            $table->string('wpreviousjobs_assignedduty1')->nullable();
            $table->string('wpreviousjobs_assignedduty2')->nullable();
            $table->date('wpreviousjobs_employmenthistory_from1')->nullable();
            $table->date('wpreviousjobs_employmenthistory_to1')->nullable();
            $table->date('wpreviousjobs_employmenthistory_from2')->nullable();
            $table->date('wpreviousjobs_employmenthistory_to2')->nullable();
            $table->string('wpreviousjobs_jobchangereason1')->nullable();
            $table->string('wpreviousjobs_jobchangereason2')->nullable();
            //ارزیابی عوامل زیان آور شغلی
            $table->boolean('currentjobs_physical_noise')->default(0);
            $table->boolean('currentjobs_physical_nonionizingradiation')->default(0);
            $table->boolean('currentjobs_physical_ionizingradiation')->default(0);
            $table->boolean('currentjobs_physical_thermalstress')->default(0);
            $table->boolean('currentjobs_physical_others')->default(0);
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
        Schema::dropIfExists('employee_profiles');
    }
}
