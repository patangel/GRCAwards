<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudgingCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judging_criterias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sector_id');
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');
            $table->unsignedBigInteger('award_program_id');
            $table->foreign('award_program_id')->references('id')->on('award_programs')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('award_id')->nullable();
            $table->string('criteria_title')->nullable();
            $table->timestamps();
        });

        $criterias = [
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'40', 'criteria_title'=>'Board Composition - Number of independent non-executive directors and board committees in place covering Risk & Compliance', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'40', 'criteria_title'=>'Policies and Framework in place enhancing Customer Experience (Evidence of process in place to oversee complaints handling system & Treating Customers Fairly)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'40', 'criteria_title'=>'Additional Information (If any)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'40', 'criteria_title'=>'Adverse Media', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'42', 'criteria_title'=>'Board Composition - Number of independent non-executive directors and board committees in place covering Risk & Compliance', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'42', 'criteria_title'=>'Policies and Framework in place enhancing Customer Experience (Evidence of process in place to oversee complaints handling system & Treating Customers Fairly)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'42', 'criteria_title'=>'Additional Information (If any)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'42', 'criteria_title'=>'Adverse Media', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'41', 'criteria_title'=>'Board Composition - Number of independent non-executive directors and board committees in place covering Risk & Compliance', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'41', 'criteria_title'=>'Policies and Framework in place enhancing Customer Experience (Evidence of process in place to oversee complaints handling system & Treating Customers Fairly)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'41', 'criteria_title'=>'Additional Information (If any)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'41', 'criteria_title'=>'Adverse Media', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'43', 'criteria_title'=>'Fraud Awareness', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'43', 'criteria_title'=>'Fraud Prevention Policies, Whistle Blowing etc', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'43', 'criteria_title'=>'Additional Information', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'7', 'award_id'=>'43', 'criteria_title'=>'Adverse Media', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'48', 'criteria_title'=>'Board Composition - Number of independent non-executive directors and board committees in place covering Risk Management', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'48', 'criteria_title'=>'Policies and Framework in place enhancing Customer Experience (Evidence of process in place to oversee complaints handling system & Treating Customers Fairly)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'48', 'criteria_title'=>'Additional Information', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'48', 'criteria_title'=>'Adverse Media', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'51', 'criteria_title'=>'Names', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'51', 'criteria_title'=>'Title', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'51', 'criteria_title'=>'Company\'s / LinkedIn Profile Link', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'51', 'criteria_title'=>'Number of independent non-executive directors', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'51', 'criteria_title'=>'Board Committee in place covering Risk Management', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'51', 'criteria_title'=>'Adverse Media', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'49', 'criteria_title'=>'Names', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'49', 'criteria_title'=>'Title', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'49', 'criteria_title'=>'Company\'s / LinkedIn Profile Link', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'49', 'criteria_title'=>'Number of independent non-executive directors', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'49', 'criteria_title'=>'Board Committee in place covering Governance/Compliance', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'49', 'criteria_title'=>'Documentations', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'49', 'criteria_title'=>'Adverse Media (Regulatory sanctions)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'50', 'criteria_title'=>'Names', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'50', 'criteria_title'=>'Board Committee in place covering Governance/Compliance', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'50', 'criteria_title'=>'Documentations', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'50', 'criteria_title'=>'Adverse Media (Regulatory sanctions)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'52', 'criteria_title'=>'Name', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'52', 'criteria_title'=>'AML Policy/Framework in Place', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'52', 'criteria_title'=>'LinkedIn Profile Link', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'52', 'criteria_title'=>'Adverse Media (Regulatory sanctions)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'NO. OF EMPLOYEES WHO RATED', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'WORKLIFE BALANCE', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'PAY & BENEFITS', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'JOB SECURITY & ADVANCEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'MANAGEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'AVERAGE RATING', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'57', 'criteria_title'=>'NO. OF EMPLOYEES WHO RATED', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'57', 'criteria_title'=>'WORKLIFE BALANCE', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'57', 'criteria_title'=>'PAY & BENEFITS', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'57', 'criteria_title'=>'JOB SECURITY & ADVANCEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'57', 'criteria_title'=>'MANAGEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'57', 'criteria_title'=>'CULTURE', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '13', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'57', 'criteria_title'=>'AVERAGE RATING', 'created_at' => now(),'updated_at' => now()],
            
            ['sector_id'=> '14', 'award_program_id'=>'2', 'category_id'=>'8', 'award_id'=>'44', 'criteria_title'=>'NO. OF EMPLOYEES WHO RATED', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '14', 'award_program_id'=>'2', 'category_id'=>'8', 'award_id'=>'44', 'criteria_title'=>'WORKLIFE BALANCE', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '14', 'award_program_id'=>'2', 'category_id'=>'8', 'award_id'=>'44', 'criteria_title'=>'PAY & BENEFITS', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '14', 'award_program_id'=>'2', 'category_id'=>'8', 'award_id'=>'44', 'criteria_title'=>'JOB SECURITY & ADVANCEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '14', 'award_program_id'=>'2', 'category_id'=>'8', 'award_id'=>'44', 'criteria_title'=>'MANAGEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '14', 'award_program_id'=>'2', 'category_id'=>'8', 'award_id'=>'44', 'criteria_title'=>'CULTURE', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '14', 'award_program_id'=>'2', 'category_id'=>'8', 'award_id'=>'44', 'criteria_title'=>'AVERAGE RATING', 'created_at' => now(),'updated_at' => now()],
            
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'71', 'criteria_title'=>'Name', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'71', 'criteria_title'=>'Title', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'71', 'criteria_title'=>'Company\'s / LinkedIn Profile', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'71', 'criteria_title'=>'Number of independent non-executive directors', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'71', 'criteria_title'=>'Board Committee in place covering Risk Management', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'71', 'criteria_title'=>'Adverse Media', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'70', 'criteria_title'=>'Names', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'70', 'criteria_title'=>'Title', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'70', 'criteria_title'=>'Company\'s / LinkedIn Profile', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'70', 'criteria_title'=>'Number of independent non-executive directors', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'70', 'criteria_title'=>'Board Committee in place covering Risk Management', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'70', 'criteria_title'=>'Adverse Media (Regulatory sanctions)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'69', 'criteria_title'=>'Number of independent non-executive directors', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'69', 'criteria_title'=>'Board Committee in place covering Audit/ Risk Management', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'69', 'criteria_title'=>'Adverse Media', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'69', 'criteria_title'=>'Evidence of Policy on Fin Crime Prevention', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'68', 'criteria_title'=>'NO. OF EMPLOYEES WHO RATED', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'68', 'criteria_title'=>'WORKLIFE BALANCE', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'68', 'criteria_title'=>'COMPENSATION & BENEFITS', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'68', 'criteria_title'=>'JOB SECURITY & ADVANCEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'68', 'criteria_title'=>'MANAGEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '21', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'68', 'criteria_title'=>'CULTURE', 'created_at' => now(),'updated_at' => now()],
            
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'64', 'criteria_title'=>'NO. OF EMPLOYEES WHO RATED', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'64', 'criteria_title'=>'WORKLIFE BALANCE', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'64', 'criteria_title'=>'PAY & BENEFITS', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'64', 'criteria_title'=>'JOB SECURITY & ADVANCEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'64', 'criteria_title'=>'MANAGEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'64', 'criteria_title'=>'CULTURE', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'64', 'criteria_title'=>'AVERAGE RATING', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'65', 'criteria_title'=>'Number of independent non-executive directors ', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'65', 'criteria_title'=>'Board Committee in place covering Audit/ Risk Management', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'65', 'criteria_title'=>'Adverse Media', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'65', 'criteria_title'=>'Evidence of Policy on FinCrime Prevention', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'67', 'criteria_title'=>'Names', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'67', 'criteria_title'=>'Title', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'67', 'criteria_title'=>'Number of independent non-executive directors', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'67', 'criteria_title'=>'Board Committee in place covering Risk Management', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'67', 'criteria_title'=>'Adverse Media', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'67', 'criteria_title'=>'Profile Link', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'66', 'criteria_title'=>'Names', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'66', 'criteria_title'=>'Title', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'66', 'criteria_title'=>'Number of independent non-executive directors', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'66', 'criteria_title'=>'Board Committee in place covering Governance/ Compliance', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'66', 'criteria_title'=>'Adverse Media (Regulatory sanctions)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '20', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'66', 'criteria_title'=>'Profile Link', 'created_at' => now(),'updated_at' => now()],
            
            ['sector_id'=> '16', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'54', 'criteria_title'=>'Names', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '16', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'54', 'criteria_title'=>'Title', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '16', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'54', 'criteria_title'=>'Number of independent non-executive directors', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '16', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'54', 'criteria_title'=>'Board Committee in place covering Risk Management', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '16', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'54', 'criteria_title'=>'Company\'s / LinkedIn Profile', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '16', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'NO. OF EMPLOYEES WHO RATED', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '16', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'WORKLIFE BALANCE', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '16', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'PAY & BENEFITS', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '16', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'JOB SECURITY & ADVANCEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '16', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'MANAGEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '16', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'CULTURE', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '16', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'AVRG RATING', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '16', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'53', 'criteria_title'=>'', 'created_at' => now(),'updated_at' => now()],
            
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'61', 'criteria_title'=>'Number of independent non-executive directors', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'61', 'criteria_title'=>'Board Committee in place covering Audit/ Risk Management', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'61', 'criteria_title'=>'Adverse Media', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'61', 'criteria_title'=>'Evidence of Policy on FinCrime Prevention', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'63', 'criteria_title'=>'Names', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'63', 'criteria_title'=>'Title', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'63', 'criteria_title'=>'Profile on LinkedIn or Company Website', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'63', 'criteria_title'=>'Number of independent non-executive directors', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'63', 'criteria_title'=>'Board Committee in place covering Risk Management', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'62', 'criteria_title'=>'Names', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'62', 'criteria_title'=>'Title', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'62', 'criteria_title'=>'LinkedIn Profile', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'62', 'criteria_title'=>'Number of independent non-executive directors', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'62', 'criteria_title'=>'Board Committee in place covering Governance/Compliance', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'62', 'criteria_title'=>'Adverse Media (Regulatory sanctions)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'60', 'criteria_title'=>'NO. OF EMPLOYEES WHO RATED', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'60', 'criteria_title'=>'WORKLIFE BALANCE', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'60', 'criteria_title'=>'PAY & BENEFITS', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'60', 'criteria_title'=>'JOB SECURITY & ADVANCEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'60', 'criteria_title'=>'MANAGEMENT', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'60', 'criteria_title'=>'CULTURE', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '19', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'60', 'criteria_title'=>'AVEARAGE RATING', 'created_at' => now(),'updated_at' => now()],
            
            ['sector_id'=> '18', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'59', 'criteria_title'=>'Names', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '18', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'59', 'criteria_title'=>'Title', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '18', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'59', 'criteria_title'=>'Number of independent non-executive directors', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '18', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'59', 'criteria_title'=>'Board Committee in place covering Risk Management', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '18', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'59', 'criteria_title'=>'Adverse Media', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '18', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'59', 'criteria_title'=>'Profile Link', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '18', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'58', 'criteria_title'=>'Names', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '18', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'58', 'criteria_title'=>'Title', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '18', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'58', 'criteria_title'=>'Number of independent non-executive directors', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '18', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'58', 'criteria_title'=>'Board Committee in place covering Governance/Compliance', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '18', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'58', 'criteria_title'=>'Adverse Media (Regulatory sanctions)', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '18', 'award_program_id'=>'2', 'category_id'=>'9', 'award_id'=>'58', 'criteria_title'=>'Profile Link', 'created_at' => now(),'updated_at' => now()],
            
            ['sector_id'=> '23', 'award_program_id'=>'2', 'category_id'=>'11', 'award_id'=>'79', 'criteria_title'=>'Profile of the Reporter', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '23', 'award_program_id'=>'2', 'category_id'=>'11', 'award_id'=>'79', 'criteria_title'=>'Areas of GRC and Anti-FinCrime the Reporter Covers', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '23', 'award_program_id'=>'2', 'category_id'=>'11', 'award_id'=>'79', 'criteria_title'=>'Evidence(s) of Reporter\'s Work', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '23', 'award_program_id'=>'2', 'category_id'=>'11', 'award_id'=>'80', 'criteria_title'=>'Profile of the TV Station', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '23', 'award_program_id'=>'2', 'category_id'=>'11', 'award_id'=>'80', 'criteria_title'=>'TV Station that Covers Areas of GRC and Anti-FinCrime ', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '23', 'award_program_id'=>'2', 'category_id'=>'11', 'award_id'=>'80', 'criteria_title'=>'Reviewer\'s Rating of the TV Station', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '23', 'award_program_id'=>'2', 'category_id'=>'11', 'award_id'=>'80', 'criteria_title'=>'Additional Information', 'created_at' => now(),'updated_at' => now()],
            
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'83', 'criteria_title'=>'Profile of the Training Provider & Areas of GRC Covered', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'83', 'criteria_title'=>'Evidence of Innovative Ways of Teaching', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'83', 'criteria_title'=>'Clients of Training Providers ', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'83', 'criteria_title'=>'Client\'s Rating of Training Provider', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'83', 'criteria_title'=>'Affiliations', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'84', 'criteria_title'=>'Profile of the Training Provider & Areas of GRC Covered', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'84', 'criteria_title'=>'Evidence of Innovative Ways of Teaching', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'84', 'criteria_title'=>'Clients of Training Providers ', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'84', 'criteria_title'=>'Client\'s Rating of Training Provider', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'84', 'criteria_title'=>'Affiliations', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'81', 'criteria_title'=>'Profile of the Software Provider', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'81', 'criteria_title'=>'Areas of GRC the Software Covers', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'81', 'criteria_title'=>'Clients of GRC Software Providers', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'81', 'criteria_title'=>'Client\'s Rating of GRC Software Provider', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'82', 'criteria_title'=>'Profile of the Software Provider', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'82', 'criteria_title'=>'Areas of Financial Crime Prevention  the Software Covers', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'82', 'criteria_title'=>'Clients of Financial Crime Prevention Software Providers', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '24', 'award_program_id'=>'2', 'category_id'=>'13', 'award_id'=>'82', 'criteria_title'=>'Client\'s Rating of Financial Crime Prevention Software Provider', 'created_at' => now(),'updated_at' => now()],
            
            
            ['sector_id'=> '25', 'award_program_id'=>'2', 'category_id'=>'14', 'award_id'=>'84', 'criteria_title'=>'Achievements', 'created_at' => now(),'updated_at' => now()],
            ['sector_id'=> '25', 'award_program_id'=>'2', 'category_id'=>'14', 'award_id'=>'84', 'criteria_title'=>'Adverse Media', 'created_at' => now(),'updated_at' => now()],
        ];

        foreach($criterias as $criteria){
            DB::table('judging_criterias')->insert($criteria);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judging_criterias');
    }
}
