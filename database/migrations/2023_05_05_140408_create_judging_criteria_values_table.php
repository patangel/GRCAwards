<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudgingCriteriaValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judging_criteria_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('award_program_id');
            $table->foreign('award_program_id')->references('id')->on('award_programs')->onDelete('cascade');
            $table->unsignedBigInteger('sector_id');
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');
            $table->unsignedBigInteger('award_id');
            $table->foreign('award_id')->references('id')->on('awards')->onDelete('cascade');
            $table->unsignedBigInteger('nominee_id');
            $table->foreign('nominee_id')->references('id')->on('nominees')->onDelete('cascade');
            $table->unsignedBigInteger('judging_criteria_id');
            $table->foreign('judging_criteria_id')->references('id')->on('judging_criterias')->onDelete('cascade');
            $table->text('criteria_value')->nullable();
            $table->timestamps();
        });

        $criteria_values = [
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '233', 'judging_criteria_id' => '1', 'criteria_value' => '5 independent non-executive directors, 3 non-executive directors'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '233', 'judging_criteria_id' => '2', 'criteria_value' => 'Enterprise risk management (ERM) Framework:
            Zenith Bank adopts an integrated approach to risk management by bringing all risks together under a limited number of oversight functions. The Bank addresses the challenge of risks comprehensively through the ERM Framework by applying practices that are supported by a governance structure consisting of Board-level and Executive Management Committees.'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '233', 'judging_criteria_id' => '3', 'criteria_value' => 'Risk governance:
            The Bank maintains a robust risk governance policy by applying leading practices that are supported by an effective governance structure consisting of Board-level and Executive Management committees such that: 
             The Board drives the risk governance and compliance process through its committees. 
             The Board Audit committee provides oversight on the systems of internal control, financial reporting and compliance. 
             The Board Credit committee reviews the credit policies and approves all loans above the 
            defined limits for Global Credit Committee. 
             The Board Risk Management committee sets the risk philosophy, policies and strategies as well as provides guidance on the various risk elements and their management. 
             The Board Risk Control Functions are supported by various Management committees and 
            sub committees (Executive Committee, ALCO and Risk Management Committee) that 
            help it develop and implement various risk strategies.'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '233', 'judging_criteria_id' => '4', 'criteria_value' => 'https://saharareporters.com/2020/09/23/alleged-n7146m-fraud-zenith-bank-staff-tells-court-how-ex-ministers-bank-account%C2%A0was-used'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '217', 'judging_criteria_id' => '1', 'criteria_value' => '4 independent non-executive directors. 5 non-executive directors. 1 Chairman, board of directors'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '217', 'judging_criteria_id' => '2', 'criteria_value' => 'The AML/CFT/CPF policies of Access Bank are formulated in compliance with the overarching regulations outlined below:
                Money Laundering (Prohibition) Act 2022,                
                Proceeds of Crime (Recovery and Management) Act, 2022,
                Banks and Other Financial Institutions Act 2020,
                Foreign Exchange Act 1995,
                Corrupt Practices and Other Related Offences Act 2000,
                Terrorism (Prevention and Prohibition) Act 2022,
                Security and Exchange Commission Code of Corporate Governance for Public Companies,
                CBN Anti-Money Laundering and Combating the Financing of Terrorism (administrative sanctions) regulations, 2018,
                CBN AML/CFT Regulations 2022 and other extant laws'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '217', 'judging_criteria_id' => '3', 'criteria_value' => 'The AML/CFT/CPF policies of Access Bank are formulated in compliance with the overarching regulations outlined below:
                Money Laundering (Prohibition) Act 2022                
                Proceeds of Crime (Recovery and Management) Act, 2022
                Banks and Other Financial Institutions Act 2020
                Foreign Exchange Act 1995
                Corrupt Practices and Other Related Offences Act 2000
                Terrorism (Prevention and Prohibition) Act 2022
                Security and Exchange Commission Code of Corporate Governance for Public Companies.
                CBN Anti-Money Laundering and Combating the Financing of Terrorism (administrative sanctions) regulations, 2018
                CBN AML/CFT Regulations 2022 and other extant laws'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '217', 'judging_criteria_id' => '4', 'criteria_value' => 'https://www.icirnigeria.org/scammers-fleece-access-bank-n871m-in-five-years/'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '222', 'judging_criteria_id' => '1', 'criteria_value' => '2 independent non-executive directors 1 executive director 1 managing director'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '222', 'judging_criteria_id' => '2', 'criteria_value' => 'The Bank has implemented a framework for Anti-Money Laundering (“AML”), Combating the Financing of Terrorism (“CFT”) and the prevention of the financing and proliferation of weapons of mass destruction.'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '222', 'judging_criteria_id' => '3', 'criteria_value' => 'The Bank as a policy, places a high value on the training of its employees. Trainings are carried out to ensure employees are conversant with the AML/CFT laws, KYC principles and other AML/CFT related information. Annual Compliance training is mandatory for all members of staff, including Senior Management and Directors. Trainings are done via e-learning or face to face media. Ad hoc training also takes place by way of the dissemination of topical national and international findings too employees.'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '222', 'judging_criteria_id' => '4', 'criteria_value' => 'https://allnews.ng/amp/news/gtbank-account-managers-under-investigation-for-667-000-fraud'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '224', 'judging_criteria_id' => '1', 'criteria_value' => 'No available information'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '224', 'judging_criteria_id' => '2', 'criteria_value' => 'There is no particular framework in place'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '224', 'judging_criteria_id' => '3', 'criteria_value' => 'The bank conducts risk management training for it business partners (Service providers/Vendors) that seek to scale and improve the efficiency of these partners.'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '224', 'judging_criteria_id' => '4', 'criteria_value' => 'https://politicsnigeria.com/firstbank-embroiled-in-n355-million-fraud-scandal-with-dispatch-rider/'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '230', 'judging_criteria_id' => '1', 'criteria_value' => '3 Independent Non-Executive Directors, Board Risk Committee, Management Risk Committee'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '230', 'judging_criteria_id' => '2', 'criteria_value' => 'Feedback & Complaint Form, Whistle Blowing form, Customer Experience forms'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '230', 'judging_criteria_id' => '3', 'criteria_value' => 'No additional information'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '40', 'nominee_id' => '230', 'judging_criteria_id' => '4', 'criteria_value' => 'https://www.ubagroup.com/57-marina/consumers-experience-key-differentiator/'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '233', 'judging_criteria_id' => '5', 'criteria_value' => '5 independent non-executive directors
            3 non-executive directors'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '233', 'judging_criteria_id' => '6', 'criteria_value' => 'AML policy and CFT policy, whistle blowing policy , feedback and complaints form'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '233', 'judging_criteria_id' => '7', 'criteria_value' => ' No available information'],

            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '225', 'judging_criteria_id' => '5', 'criteria_value' => '3 Independent Non-Executive '],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '225', 'judging_criteria_id' => '6', 'criteria_value' => 'Whistle Blowing Policy, Feedback & Complaint form'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '225', 'judging_criteria_id' => '7', 'criteria_value' => 'The Code of Conduct and Ethics commits the Management and employees of Stanbic IBTC Bank
            PLC and its subsidiaries (“hereinafter called “Stanbic IBTC”) to the highest standards of
            professional, business as well as behavioral conduct. The Board shall drive the implementation
            of the Code of Conduct and Ethics.'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '225', 'judging_criteria_id' => '8', 'criteria_value' => 'https://www.stanbicibtcbank.com/static_file/Nigeria/nigeriabank/About%20Us/Code%20of%20ethics/2021%20Stanbic%20IBTC%20Bank%20Code%20of%20Conduct.pdf'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '217', 'judging_criteria_id' => '5', 'criteria_value' => '4 independent non-executive directors.
            5 non-executive directors
            1 Chairman, board of directors'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '217', 'judging_criteria_id' => '6', 'criteria_value' => 'Whistle Blowing policy, AML, CFT, CPF policy Security and Exchange Commission Code of Corporate Governance for Public Companies.'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '217', 'judging_criteria_id' => '7', 'criteria_value' => 'Periodic trainings is being done for staffs on AML, Fincrime and combating the financing of terrorism'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '217', 'judging_criteria_id' => '8', 'criteria_value' => 'https://punchng.com/three-banks-report-26877-fraud-cases-in-h1/'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '222', 'judging_criteria_id' => '5', 'criteria_value' => '2 independent non-executive directors 
            1 executive director 
            1 managing director'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '222', 'judging_criteria_id' => '6', 'criteria_value' => 'AML policy and CFT policy, whistle blowing policy , feedback and complaints form'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '222', 'judging_criteria_id' => '7', 'criteria_value' => 'Guaranty Trust Bank plc is dedicated to the combating of financial crimes, including money laundering and terrorist financing. In this regard, the Bank has implemented a framework for Anti-Money Laundering (“AML”), Combating the Financing of Terrorism (“CFT”) and the prevention of the financing and proliferation of weapons of mass destruction.
            The framework ensures adherence to AML/CFT legislation and regulations in Nigeria as well as leading best practices including but not limited to the Financial Action Task Force (FATF) 40 Recommendations.'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '224', 'judging_criteria_id' => '5', 'criteria_value' => 'No available information'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '224', 'judging_criteria_id' => '6', 'criteria_value' => 'CBN AML and CFT policy, Whistleblowing policy'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '224', 'judging_criteria_id' => '7', 'criteria_value' => 'No available Information'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '224', 'judging_criteria_id' => '8', 'criteria_value' => 'https://www.efcc.gov.ng/news/3928-n466m-polaris-bank-fraud-court-to-rule-on-jurisdiction-mar-29'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '235', 'judging_criteria_id' => '5', 'criteria_value' => '2 Independent Non-Executive Directors, Board Risk Committee'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '235', 'judging_criteria_id' => '6', 'criteria_value' => 'Whistle Blowing Policy, Feedback & Complaint form'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '235', 'judging_criteria_id' => '7', 'criteria_value' => 'FirstBank is committed to conducting business with utmost level of integrity, transparency,
            and compliance with legal, ethical and regulatory standards. Our reputation and success as
            an organization is built upon this foundation as we strive to maintain our position as a
            leading organization both locally and internationally. 
            '],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '42', 'nominee_id' => '235', 'judging_criteria_id' => '8', 'criteria_value' => 'https://www.idfcfirstbank.com/content/dam/idfcfirstbank/pdf/corporate-governance/IDFC-FIRST-Bank--Whistle-Blower-Policy.pdf'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '41', 'nominee_id' => '233', 'judging_criteria_id' => '9', 'criteria_value' => '5 independent non-executive directors
            3 non-executive directors'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '41', 'nominee_id' => '233', 'judging_criteria_id' => '10', 'criteria_value' => 'Periodic trainings for all Business partners, vendors and customers for effective knowledge in the area of risk and compliance.'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '41', 'nominee_id' => '233', 'judging_criteria_id' => '11', 'criteria_value' => 'A bank-wide risk management framework has been put in place and is enforced by the Board Risk Management Committee for overall risk assessment of various areas of the Bank’s operations and compliance.'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '41', 'nominee_id' => '217', 'judging_criteria_id' => '9', 'criteria_value' => '4 independent non-executive directors.
            5 non-executive directors
            1 Chairman, board of directors'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '41', 'nominee_id' => '217', 'judging_criteria_id' => '10', 'criteria_value' => 'Periodic trainings for all Business partners, vendors and customers for effective knowledge in the area of risk and compliance.'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '41', 'nominee_id' => '217', 'judging_criteria_id' => '11', 'criteria_value' => 'No available Information'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '41', 'nominee_id' => '222', 'judging_criteria_id' => '9', 'criteria_value' => '2 independent non-executive directors 
            1 executive director 
            1 managing director'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '41', 'nominee_id' => '222', 'judging_criteria_id' => '10', 'criteria_value' => 'Periodic trainings for all Business partners, vendors and customers for effective knowledge in the area of risk and compliance.'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '41', 'nominee_id' => '222', 'judging_criteria_id' => '11', 'criteria_value' => 'No available Information'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '41', 'nominee_id' => '224', 'judging_criteria_id' => '9', 'criteria_value' => 'No available information'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '41', 'nominee_id' => '224', 'judging_criteria_id' => '10', 'criteria_value' => 'Periodic trainings for all Business partners, vendors and customers for effective knowledge in the area of risk and compliance.'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '41', 'nominee_id' => '224', 'judging_criteria_id' => '11', 'criteria_value' => 'No available Information'],
            
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '217', 'judging_criteria_id' => '13', 'criteria_value' => 'Awareness campaign launched, Fraud alert tips via social media platforms, emails and messages on customers registered mobile numbers'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '217', 'judging_criteria_id' => '14', 'criteria_value' => 'Quality policy, whistleblowing policy, Campaigns on Fraud prevention'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '217', 'judging_criteria_id' => '15', 'criteria_value' => 'No available information'],

            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '222', 'judging_criteria_id' => '13', 'criteria_value' => 'Customer complaints via email, fraud alert tips, email alert for security breaching and customer care lines for complaints'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '222', 'judging_criteria_id' => '14', 'criteria_value' => 'Quality policy, whistleblowing policy, Campaigns on Fraud prevention'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '222', 'judging_criteria_id' => '15', 'criteria_value' => 'No available information'],

            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '233', 'judging_criteria_id' => '13', 'criteria_value' => 'Email alerts and awareness on privacy and personal information guide, customer service lines, fraud alert and security tips.'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '233', 'judging_criteria_id' => '14', 'criteria_value' => 'Quality policy, whistleblowing policy, Campaigns on Fraud prevention'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '233', 'judging_criteria_id' => '15', 'criteria_value' => 'No available information'],

            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '224', 'judging_criteria_id' => '13', 'criteria_value' => 'Fraud alert call lines and emails, security tips and fraud alert messages'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '224', 'judging_criteria_id' => '14', 'criteria_value' => 'Quality policy, whistleblowing policy, Campaigns on Fraud prevention'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '224', 'judging_criteria_id' => '15', 'criteria_value' => 'No available information'],

            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '227', 'judging_criteria_id' => '13', 'criteria_value' => 'Evidences of security tips and fraud awareness via Website, social media, SMS and Email. Presence of FAQ\'s containing ways to solve fraudulent activities.'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '227', 'judging_criteria_id' => '14', 'criteria_value' => 'Whistle Blowing Policy, Quality Policy'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '227', 'judging_criteria_id' => '15', 'criteria_value' => 'No available Information '],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '227', 'judging_criteria_id' => '16', 'criteria_value' => 'https://sterling.ng/support/fraud/'],

            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '235', 'judging_criteria_id' => '13', 'criteria_value' => 'Evidences of Security Tips and Fraud awareness via Social Media, Website'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '235', 'judging_criteria_id' => '14', 'criteria_value' => 'Whistle Blowing Policy, Quality Policy'],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '235', 'judging_criteria_id' => '15', 'criteria_value' => 'No available Information '],
            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '43', 'nominee_id' => '235', 'judging_criteria_id' => '16', 'criteria_value' => 'https://www.firstbankonline.com/security-center/fraud-prevention/'],
            
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '265', 'judging_criteria_id' => '17', 'criteria_value' => '4 independent non-executive directors.
            5 non-executive directors
            1 Chairman, board of directors'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '265', 'judging_criteria_id' => '18', 'criteria_value' => 'Corporate governance and compliance policy, AML and CFT training for it employees.'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '265', 'judging_criteria_id' => '19', 'criteria_value' => 'No Available information'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '281', 'judging_criteria_id' => '17', 'criteria_value' => '5 independent non-executive directors3 non-executive directors
            '],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '281', 'judging_criteria_id' => '18', 'criteria_value' => 'CFT/AML training for all it employees, Risk assessment, quality assurance policy  '],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '281', 'judging_criteria_id' => '19', 'criteria_value' => 'No Available information'],

            // ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '266', 'judging_criteria_id' => '1', 'criteria_value' => ''],
            // ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '269', 'judging_criteria_id' => '1', 'criteria_value' => ''],
            
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '270', 'judging_criteria_id' => '17', 'criteria_value' => '2 independent non-executive directors 
            1 executive director 
            1 managing director'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '270', 'judging_criteria_id' => '18', 'criteria_value' => 'Board and management responsibilities,Reports to Senior Management and the Board, Know your customer (KYC policy), Transaction monitoring, Relationship with Regulators and Law Enforcement Agencies, Risk assessment, CFT/AML training.'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '270', 'judging_criteria_id' => '19', 'criteria_value' => 'The Bank has moved away from a “rule based, tick box” approach for combating financial crime risk, to a risk-based approach. Thus, the Bank identifies and assesses the risks from a proactive stance and allocates the requisite resources which center around systems and controls to manage these risks.'],
            
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '283', 'judging_criteria_id' => '17', 'criteria_value' => '2 Independent Non-Executive Directors, Board Risk Committee'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '283', 'judging_criteria_id' => '18', 'criteria_value' => 'Whistle Blower policy, Feedback and complaint form'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '48', 'nominee_id' => '283', 'judging_criteria_id' => '19', 'criteria_value' => 'No available Information'],
            
            // ==================================================================================================================================================//
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '270', 'judging_criteria_id' => '21', 'criteria_value' => 'Olumide Oguntuase'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '270', 'judging_criteria_id' => '22', 'criteria_value' => 'General Manager - Head, Enterprise Risk Management Division'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '270', 'judging_criteria_id' => '23', 'criteria_value' => 'https://www.gtbank.com/about/our-company/people#management-team'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '270', 'judging_criteria_id' => '24', 'criteria_value' => '2'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '270', 'judging_criteria_id' => '25', 'criteria_value' => 'Not available Online'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '270', 'judging_criteria_id' => '26', 'criteria_value' => 'Not Available'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '281', 'judging_criteria_id' => '21', 'criteria_value' => 'Felix Egbon'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '281', 'judging_criteria_id' => '22', 'criteria_value' => 'Mr. Felix Egbon is the Chief Risk Officer of the bank. He is a General Manager (GM) and currently the Group Head, Risk Management Group of the bank.
            READ MORE'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '281', 'judging_criteria_id' => '23', 'criteria_value' => 'https://www.zenithbank.com/about-us/management-team-2/'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '281', 'judging_criteria_id' => '24', 'criteria_value' => '5'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '281', 'judging_criteria_id' => '25', 'criteria_value' => 'Yes - Audit / Governance / 
            Credit Committee'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '281', 'judging_criteria_id' => '26', 'criteria_value' => '“Felix Egbon” + “Fraud” OR “Money Laundering” OR “Fines” OR “Sanctions” OR “Tax Evasion” OR “Pornography” OR “Environment” OR “Health and Safety” OR “Embargo” OR “Rape” OR “Violence” OR “Terrorism” OR “Hostage” OR “Ransom” ”Bankruptcy” OR “Scandal” OR “Penalty” OR “Lawsuit” OR “Conflict” OR “Breach” OR “Conflict” OR “War” OR “Violation” OR “Ammunitions” OR “Embezzlement” OR “Scam” OR “illegal” OR “Human Trafficking” - Google Search'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '265', 'judging_criteria_id' => '21', 'criteria_value' => 'Gregory Jobome'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '265', 'judging_criteria_id' => '22', 'criteria_value' => 'Executive Director / Chief Risk Officer'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '265', 'judging_criteria_id' => '23', 'criteria_value' => 'https://investorrelations.accessbankplc.com/AccessBankGroup/media/Investors/Annual-Reports/2021-Annual-Report-Full.pdf'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '265', 'judging_criteria_id' => '24', 'criteria_value' => '4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '265', 'judging_criteria_id' => '25', 'criteria_value' => 'Yes - Audit / 
            Credit Committee ( Annual 
            Financial Report)'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '265', 'judging_criteria_id' => '26', 'criteria_value' => '“Gregory Jobome” + “Fraud” OR “Money Laundering” OR “Fines” OR “Sanctions” OR “Tax Evasion” OR “Pornography” OR “Environment” OR “Health and Safety” OR “Embargo” OR “Rape” OR “Violence” OR “Terrorism” OR “Hostage” OR “Ransom” ”Bankruptcy” OR “Scandal” OR “Penalty” OR “Lawsuit” OR “Conflict” OR “Breach” OR “Conflict” OR “War” OR “Violation” OR “Ammunitions” OR “Embezzlement” OR “Scam” OR “illegal” OR “Human Trafficking” - Google Search'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '275', 'judging_criteria_id' => '21', 'criteria_value' => 'Femi Jaiyeola'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '275', 'judging_criteria_id' => '22', 'criteria_value' => 'Chief Audit Executive / Risk '],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '275', 'judging_criteria_id' => '23', 'criteria_value' => 'https://sterling.ng/about/executive-management/'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '275', 'judging_criteria_id' => '24', 'criteria_value' => '2'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '275', 'judging_criteria_id' => '25', 'criteria_value' => 'Not available Online'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '275', 'judging_criteria_id' => '26', 'criteria_value' => '“Femi Jaiyeola” + “Fraud” OR “Money Laundering” OR “Fines” OR “Sanctions” OR “Tax Evasion” OR “Pornography” OR “Environment” OR “Health and Safety” OR “Embargo” OR “Rape” OR “Violence” OR “Terrorism” OR “Hostage” OR “Ransom” ”Bankruptcy” OR “Scandal” OR “Penalty” OR “Lawsuit” OR “Conflict” OR “Breach” OR “Conflict” OR “War” OR “Violation” OR “Ammunitions” OR “Embezzlement” OR “Scam” OR “illegal” OR “Human Trafficking” - Google Search'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '278', 'judging_criteria_id' => '21', 'criteria_value' => 'Uche Ike'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '278', 'judging_criteria_id' => '22', 'criteria_value' => 'Executive Director & Head-Compliance & Risk'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '278', 'judging_criteria_id' => '23', 'criteria_value' => 'https://unitedbafrica.com/accounts/Boardofdirectors/index.html'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '278', 'judging_criteria_id' => '24', 'criteria_value' => '3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '278', 'judging_criteria_id' => '25', 'criteria_value' => 'Yes'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '278', 'judging_criteria_id' => '26', 'criteria_value' => 'N/A'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '283', 'judging_criteria_id' => '21', 'criteria_value' => 'Olusegun Alebiosu'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '283', 'judging_criteria_id' => '22', 'criteria_value' => 'Executive Director / Chief Risk Officer'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '283', 'judging_criteria_id' => '23', 'criteria_value' => 'https://www.firstbanknigeria.com/olusegun-alebiosu/'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '283', 'judging_criteria_id' => '24', 'criteria_value' => '2'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '283', 'judging_criteria_id' => '25', 'criteria_value' => 'Yes - Operational Risk'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '51', 'nominee_id' => '283', 'judging_criteria_id' => '26', 'criteria_value' => 'N/A'],
            // ==================================================================================================================================================//

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '281', 'judging_criteria_id' => '1', 'criteria_value' => 'Oladoyin Olugbuyi'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '281', 'judging_criteria_id' => '2', 'criteria_value' => 'Chief Compliance Officer'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '281', 'judging_criteria_id' => '3', 'criteria_value' => 'https://ng.linkedin.com/in/doyin-olugbuyi-b4a48365'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '281', 'judging_criteria_id' => '4', 'criteria_value' => '5 independent non-executive directors
            3 non-executive directors'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '281', 'judging_criteria_id' => '5', 'criteria_value' => '3'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '265', 'judging_criteria_id' => '1', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '265', 'judging_criteria_id' => '2', 'criteria_value' => 'Chief Compliance Officer'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '265', 'judging_criteria_id' => '3', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '265', 'judging_criteria_id' => '4', 'criteria_value' => '4 independent non-executive directors.
            5 non-executive directors
            1 Chairman, board of directors'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '265', 'judging_criteria_id' => '5', 'criteria_value' => 'No available information'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '266', 'judging_criteria_id' => '1', 'criteria_value' => 'Mr. Opeyemi Adojutelegan'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '266', 'judging_criteria_id' => '2', 'criteria_value' => 'Citi Country Compliance Officer'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '266', 'judging_criteria_id' => '3', 'criteria_value' => 'Citi | Europe, Middle East & Africa | Nigeria (citigroup.com)'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '266', 'judging_criteria_id' => '4', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '266', 'judging_criteria_id' => '5', 'criteria_value' => ''],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '273', 'judging_criteria_id' => '1', 'criteria_value' => 'Adegbite Adekola'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '273', 'judging_criteria_id' => '2', 'criteria_value' => 'Chief Compliance Officer '],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '273', 'judging_criteria_id' => '3', 'criteria_value' => 'https://ng.linkedin.com/in/adegbite-adekola-cams-acma-cgma-hcib-73b6a77a'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '273', 'judging_criteria_id' => '4', 'criteria_value' => 'Three'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '273', 'judging_criteria_id' => '5', 'criteria_value' => 'Yes- Audit'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '278', 'judging_criteria_id' => '1', 'criteria_value' => 'Mudasiru Sanusi'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '278', 'judging_criteria_id' => '2', 'criteria_value' => 'Group Chief Compliance Officer'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '278', 'judging_criteria_id' => '3', 'criteria_value' => 'https://www.linkedin.com/in/mudasiru-sanusi-120974203/'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '278', 'judging_criteria_id' => '4', 'criteria_value' => 'Three'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '278', 'judging_criteria_id' => '5', 'criteria_value' => 'Yes'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '280', 'judging_criteria_id' => '1', 'criteria_value' => 'Johnson Lebile'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '280', 'judging_criteria_id' => '2', 'criteria_value' => 'Company Secretary & Legal Officer'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '280', 'judging_criteria_id' => '3', 'criteria_value' => 'Management Team - Wema Bank Plc'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '280', 'judging_criteria_id' => '4', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '280', 'judging_criteria_id' => '5', 'criteria_value' => ''],
            
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '281', 'judging_criteria_id' => '1', 'criteria_value' => 'Team Zenith'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '281', 'judging_criteria_id' => '2', 'criteria_value' => 'N/A'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '281', 'judging_criteria_id' => '3', 'criteria_value' => '- Anti-Bribery Program
            - Code of Ethics
            - Code of Conduct
            - Compliance Policies
            - Corporate Governanace Guidelines etc'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '49', 'nominee_id' => '281', 'judging_criteria_id' => '4', 'criteria_value' => 'http://www.oasesnews.com/business/economy/item/3489-access-zenith-bank-3-others-lose-n312million-to-cbn-sanctions'],
            
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '265', 'judging_criteria_id' => '1', 'criteria_value' => 'Team Access'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '265', 'judging_criteria_id' => '2', 'criteria_value' => 'No available information'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '265', 'judging_criteria_id' => '3', 'criteria_value' => 'Anti-money laundering policy, The Securities and Exchange Commission’s Code of Best Practice'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '265', 'judging_criteria_id' => '4', 'criteria_value' => 'http://www.oasesnews.com/business/economy/item/3489-access-zenith-bank-3-others-lose-n312million-to-cbn-sanctions'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '266', 'judging_criteria_id' => '1', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '266', 'judging_criteria_id' => '2', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '266', 'judging_criteria_id' => '3', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '266', 'judging_criteria_id' => '4', 'criteria_value' => ''],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '269', 'judging_criteria_id' => '1', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '269', 'judging_criteria_id' => '2', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '269', 'judging_criteria_id' => '3', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '269', 'judging_criteria_id' => '4', 'criteria_value' => ''],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '272', 'judging_criteria_id' => '1', 'criteria_value' => 'Team Polaris'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '272', 'judging_criteria_id' => '2', 'criteria_value' => 'No available information'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '272', 'judging_criteria_id' => '3', 'criteria_value' => 'Whistleblowing policies, compliance policies and privacy policy'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '272', 'judging_criteria_id' => '4', 'criteria_value' => 'https://www.financialwatchngr.com/2021/06/28/polaris-bank-speaks-on-nnpcs-223-9m-transactions/'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '273', 'judging_criteria_id' => '1', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '273', 'judging_criteria_id' => '2', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '273', 'judging_criteria_id' => '3', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '273', 'judging_criteria_id' => '4', 'criteria_value' => ''],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '280', 'judging_criteria_id' => '1', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '280', 'judging_criteria_id' => '2', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '280', 'judging_criteria_id' => '3', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '280', 'judging_criteria_id' => '4', 'criteria_value' => ''],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '283', 'judging_criteria_id' => '1', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '283', 'judging_criteria_id' => '2', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '283', 'judging_criteria_id' => '3', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '50', 'nominee_id' => '283', 'judging_criteria_id' => '4', 'criteria_value' => ''],
            
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '270', 'judging_criteria_id' => '1', 'criteria_value' => 'Osa Aiwerioghene'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '270', 'judging_criteria_id' => '2', 'criteria_value' => 'AML, CFT policies, Whistle Blower Policy, Feedback Policy.'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '270', 'judging_criteria_id' => '3', 'criteria_value' => 'https://www.linkedin.com/in/osa-aiwerioghene-2352832b/?originalSubdomain=ng'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '270', 'judging_criteria_id' => '4', 'criteria_value' => '“Osa Aiwerioghene” + “Fraud” OR “Money Laundering” OR “Fines” OR “Sanctions” OR “Tax Evasion” OR “Pornography” OR “Environment” OR “Health and Safety” OR “Embargo” OR “Rape” OR “Violence” OR “Terrorism” OR “Hostage” OR “Ransom” ”Bankruptcy” OR “Scandal” OR “Penalty” OR “Lawsuit” OR “Conflict” OR “Breach” OR “Conflict” OR “War” OR “Violation” OR “Ammunitions” OR “Embezzlement” OR “Scam” OR “illegal” OR “Human Trafficking” - Google Search'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '281', 'judging_criteria_id' => '1', 'criteria_value' => 'Oladoyin Olugbuyi'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '281', 'judging_criteria_id' => '2', 'criteria_value' => 'Whistleblower policy, AML, CFT policies , KYC policies'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '281', 'judging_criteria_id' => '3', 'criteria_value' => 'https://ng.linkedin.com/in/doyin-olugbuyi-b4a48365'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '281', 'judging_criteria_id' => '4', 'criteria_value' => 'Retrieving data. Wait a few seconds and try to cut or copy again.'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '265', 'judging_criteria_id' => '1', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '265', 'judging_criteria_id' => '2', 'criteria_value' => 'CBN AML, CFT policies, Whistleblower policy, Quality policy and Feedback policy'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '265', 'judging_criteria_id' => '3', 'criteria_value' => ''],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '265', 'judging_criteria_id' => '4', 'criteria_value' => '“AUGUSTINE ACHIKASIM” + “Fraud” OR “Money Laundering” OR “Fines” OR “Sanctions” OR “Tax Evasion” OR “Pornography” OR “Environment” OR “Health and Safety” OR “Embargo” OR “Rape” OR “Violence” OR “Terrorism” OR “Hostage” OR “Ransom” ”Bankruptcy” OR “Scandal” OR “Penalty” OR “Lawsuit” OR “Conflict” OR “Breach” OR “Conflict” OR “War” OR “Violation” OR “Ammunitions” OR “Embezzlement” OR “Scam” OR “illegal” OR “Human Trafficking” - Google Search'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '275', 'judging_criteria_id' => '1', 'criteria_value' => 'Kelechi Nwaoba'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '275', 'judging_criteria_id' => '2', 'criteria_value' => 'Whistle Blower Policy, Feedback Complaint Form, Quality Policy'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '275', 'judging_criteria_id' => '3', 'criteria_value' => 'STERLNBANK.NG Company Profile & Executives - Sterling Bank PLC - Wall Street Journal (wsj.com),
            https://sterling.ng/about/executive-management/,            
            https://ng.linkedin.com/in/kelechi-n-986b4618'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '275', 'judging_criteria_id' => '4', 'criteria_value' => '“Kelechi Nwaoba” + “Fraud” OR “Money Laundering” OR “Fines” OR “Sanctions” OR “Tax Evasion” OR “Pornography” OR “Environment” OR “Health and Safety” OR “Embargo” OR “Rape” OR “Violence” OR “Terrorism” OR “Hostage” OR “Ransom” ”Bankruptcy” OR “Scandal” OR “Penalty” OR “Lawsuit” OR “Conflict” OR “Breach” OR “Conflict” OR “War” OR “Violation” OR “Ammunitions” OR “Embezzlement” OR “Scam” OR “illegal” OR “Human Trafficking” - Google Search'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '283', 'judging_criteria_id' => '1', 'criteria_value' => 'Adeyemi Oluyinka Ogunmoyela'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '283', 'judging_criteria_id' => '2', 'criteria_value' => 'AML, CFT policies, Whistle Blower Policy, Feedback Policy.'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '283', 'judging_criteria_id' => '3', 'criteria_value' => 'Leadership - FirstBank Nigeria'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '52', 'nominee_id' => '283', 'judging_criteria_id' => '4', 'criteria_value' => '“Adeyemi Oluyinka Ogunmoyela” + “Fraud” OR “Money Laundering” OR “Fines” OR “Sanctions” OR “Tax Evasion” OR “Pornography” OR “Environment” OR “Health and Safety” OR “Embargo” OR “Rape” OR “Violence” OR “Terrorism” OR “Hostage” OR “Ransom” ”Bankruptcy” OR “Scandal” OR “Penalty” OR “Lawsuit” OR “Conflict” OR “Breach” OR “Conflict” OR “War” OR “Violation” OR “Ammunitions” OR “Embezzlement” OR “Scam” OR “illegal” OR “Human Trafficking” - Google Search'],
            
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '265', 'judging_criteria_id' => '1', 'criteria_value' => '1300; https://www.glassdoor.com/Reviews/Access-Bank-PLC-Reviews-E238787.html'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '265', 'judging_criteria_id' => '2', 'criteria_value' => '2.4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '265', 'judging_criteria_id' => '3', 'criteria_value' => '3.5'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '265', 'judging_criteria_id' => '4', 'criteria_value' => '3.8'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '265', 'judging_criteria_id' => '5', 'criteria_value' => '3.3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '265', 'judging_criteria_id' => '6', 'criteria_value' => '3.25'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '281', 'judging_criteria_id' => '1', 'criteria_value' => '736; https://www.glassdoor.com/Reviews/Zenith-Bank-Reviews-E242816.htm'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '281', 'judging_criteria_id' => '2', 'criteria_value' => '2.8'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '281', 'judging_criteria_id' => '3', 'criteria_value' => '2.8'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '281', 'judging_criteria_id' => '4', 'criteria_value' => '3.3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '281', 'judging_criteria_id' => '5', 'criteria_value' => '3.1'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '281', 'judging_criteria_id' => '6', 'criteria_value' => '3.00'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '267', 'judging_criteria_id' => '1', 'criteria_value' => '556; https://www.glassdoor.com/Reviews/Ecobank-Reviews-E413427.htm '],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '267', 'judging_criteria_id' => '2', 'criteria_value' => '2.9'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '267', 'judging_criteria_id' => '3', 'criteria_value' => '2.6'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '267', 'judging_criteria_id' => '4', 'criteria_value' => '3.1'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '267', 'judging_criteria_id' => '5', 'criteria_value' => '3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '267', 'judging_criteria_id' => '6', 'criteria_value' => '2.90'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '270', 'judging_criteria_id' => '1', 'criteria_value' => '880; https://www.glassdoor.com/Overview/Working-at-Guaranty-Trust-Bank-Nigeria-EI_IE350383.11,38.htm'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '270', 'judging_criteria_id' => '2', 'criteria_value' => '2.3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '270', 'judging_criteria_id' => '3', 'criteria_value' => '3.2'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '270', 'judging_criteria_id' => '4', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '270', 'judging_criteria_id' => '5', 'criteria_value' => '3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '270', 'judging_criteria_id' => '6', 'criteria_value' => '2.98'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '272', 'judging_criteria_id' => '1', 'criteria_value' => '174; https://www.glassdoor.com/Reviews/Polaris-Bank-Reviews-E2358592.htm'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '272', 'judging_criteria_id' => '2', 'criteria_value' => '3.2'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '272', 'judging_criteria_id' => '3', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '272', 'judging_criteria_id' => '4', 'criteria_value' => '3.7'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '272', 'judging_criteria_id' => '5', 'criteria_value' => '3.3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '272', 'judging_criteria_id' => '6', 'criteria_value' => '3.40'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '275', 'judging_criteria_id' => '1', 'criteria_value' => '385; https://www.glassdoor.com/Reviews/Sterling-Bank-Plc-Reviews-E598064.htm'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '275', 'judging_criteria_id' => '2', 'criteria_value' => '4.3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '275', 'judging_criteria_id' => '3', 'criteria_value' => '4.1'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '275', 'judging_criteria_id' => '4', 'criteria_value' => '4.3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '275', 'judging_criteria_id' => '5', 'criteria_value' => '4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '275', 'judging_criteria_id' => '6', 'criteria_value' => '4.18'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '278', 'judging_criteria_id' => '1', 'criteria_value' => '1072; https://www.glassdoor.com/Reviews/United-Bank-for-Africa-Reviews-E275472.htm'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '278', 'judging_criteria_id' => '2', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '278', 'judging_criteria_id' => '3', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '278', 'judging_criteria_id' => '4', 'criteria_value' => '3.8'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '278', 'judging_criteria_id' => '5', 'criteria_value' => '3.6'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '278', 'judging_criteria_id' => '6', 'criteria_value' => '3.55'],
            
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '283', 'judging_criteria_id' => '1', 'criteria_value' => '670; https://www.glassdoor.com/Reviews/First-Bank-of-Nigeria-Reviews-E374418.htm  '],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '283', 'judging_criteria_id' => '2', 'criteria_value' => '3.3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '283', 'judging_criteria_id' => '3', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '283', 'judging_criteria_id' => '4', 'criteria_value' => '3.8'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '283', 'judging_criteria_id' => '5', 'criteria_value' => '3.5'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '46', 'nominee_id' => '283', 'judging_criteria_id' => '6', 'criteria_value' => '3.50'],
            
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '281', 'judging_criteria_id' => '1', 'criteria_value' => '736; https://www.glassdoor.com/Reviews/Zenith-Bank-Reviews-E242816.htm'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '281', 'judging_criteria_id' => '2', 'criteria_value' => '2.8'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '281', 'judging_criteria_id' => '3', 'criteria_value' => '2.8'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '281', 'judging_criteria_id' => '4', 'criteria_value' => '3.3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '281', 'judging_criteria_id' => '5', 'criteria_value' => '3.1'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '281', 'judging_criteria_id' => '6', 'criteria_value' => '3.5'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '281', 'judging_criteria_id' => '7', 'criteria_value' => '3.10'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '265', 'judging_criteria_id' => '1', 'criteria_value' => '1300; https://www.glassdoor.com/Reviews/Access-Bank-PLC-Reviews-E238787.htm'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '265', 'judging_criteria_id' => '2', 'criteria_value' => '2.4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '265', 'judging_criteria_id' => '3', 'criteria_value' => '3.5'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '265', 'judging_criteria_id' => '4', 'criteria_value' => '3.8'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '265', 'judging_criteria_id' => '5', 'criteria_value' => '3.3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '265', 'judging_criteria_id' => '6', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '265', 'judging_criteria_id' => '7', 'criteria_value' => '3.28'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '267', 'judging_criteria_id' => '1', 'criteria_value' => '556; https://www.glassdoor.com/Reviews/Ecobank-Reviews-E413427.htm'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '267', 'judging_criteria_id' => '2', 'criteria_value' => '2.9'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '267', 'judging_criteria_id' => '3', 'criteria_value' => '2.6'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '267', 'judging_criteria_id' => '4', 'criteria_value' => '3.1'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '267', 'judging_criteria_id' => '5', 'criteria_value' => '3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '267', 'judging_criteria_id' => '6', 'criteria_value' => '3.5'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '267', 'judging_criteria_id' => '7', 'criteria_value' => '3.02'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '272', 'judging_criteria_id' => '1', 'criteria_value' => '174; https://www.glassdoor.com/Reviews/Polaris-Bank-Reviews-E2358592.htm'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '272', 'judging_criteria_id' => '2', 'criteria_value' => '3.2'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '272', 'judging_criteria_id' => '3', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '272', 'judging_criteria_id' => '4', 'criteria_value' => '3.7'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '272', 'judging_criteria_id' => '5', 'criteria_value' => '3.3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '272', 'judging_criteria_id' => '6', 'criteria_value' => '3.5'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '272', 'judging_criteria_id' => '7', 'criteria_value' => '3.42'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '275', 'judging_criteria_id' => '1', 'criteria_value' => '385; https://www.glassdoor.com/Reviews/Sterling-Bank-Plc-Reviews-E598064.htm'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '275', 'judging_criteria_id' => '2', 'criteria_value' => '4.3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '275', 'judging_criteria_id' => '3', 'criteria_value' => '4.1'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '275', 'judging_criteria_id' => '4', 'criteria_value' => '4.3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '275', 'judging_criteria_id' => '5', 'criteria_value' => '4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '275', 'judging_criteria_id' => '6', 'criteria_value' => '4.4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '275', 'judging_criteria_id' => '7', 'criteria_value' => '4.22'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '278', 'judging_criteria_id' => '1', 'criteria_value' => '1072; https://www.glassdoor.com/Reviews/United-Bank-for-Africa-Reviews-E275472.htm'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '278', 'judging_criteria_id' => '2', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '278', 'judging_criteria_id' => '3', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '278', 'judging_criteria_id' => '4', 'criteria_value' => '3.8'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '278', 'judging_criteria_id' => '5', 'criteria_value' => '3.6'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '278', 'judging_criteria_id' => '6', 'criteria_value' => '4.1'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '278', 'judging_criteria_id' => '7', 'criteria_value' => '3.66'],

            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '283', 'judging_criteria_id' => '1', 'criteria_value' => '670; https://www.glassdoor.com/Reviews/First-Bank-of-Nigeria-Reviews-E374418.htm'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '283', 'judging_criteria_id' => '2', 'criteria_value' => '3.3'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '283', 'judging_criteria_id' => '3', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '283', 'judging_criteria_id' => '4', 'criteria_value' => '3.8'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '283', 'judging_criteria_id' => '5', 'criteria_value' => '3.5'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '283', 'judging_criteria_id' => '6', 'criteria_value' => '3.7'],
            ['award_program_id' => '2', 'sector_id' => '15', 'award_id' => '47', 'nominee_id' => '283', 'judging_criteria_id' => '7', 'criteria_value' => '3.54'],
            
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '281', 'judging_criteria_id' => '1', 'criteria_value' => '736; https://www.glassdoor.com/Reviews/Zenith-Bank-Reviews-E242816.htm'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '281', 'judging_criteria_id' => '2', 'criteria_value' => '2.8'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '281', 'judging_criteria_id' => '3', 'criteria_value' => '2.8'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '281', 'judging_criteria_id' => '4', 'criteria_value' => '3.3'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '281', 'judging_criteria_id' => '5', 'criteria_value' => '3.1'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '281', 'judging_criteria_id' => '6', 'criteria_value' => '3.5'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '281', 'judging_criteria_id' => '7', 'criteria_value' => '3.1'],

            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '270', 'judging_criteria_id' => '1', 'criteria_value' => '880; https://www.glassdoor.com/Overview/Working-at-Guaranty-Trust-Bank-Nigeria-EI_IE350383.11,38.htm'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '270', 'judging_criteria_id' => '2', 'criteria_value' => '2.3'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '270', 'judging_criteria_id' => '3', 'criteria_value' => '3.2'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '270', 'judging_criteria_id' => '4', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '270', 'judging_criteria_id' => '5', 'criteria_value' => '3'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '270', 'judging_criteria_id' => '6', 'criteria_value' => '3.3'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '270', 'judging_criteria_id' => '7', 'criteria_value' => '3.07'],

            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '275', 'judging_criteria_id' => '1', 'criteria_value' => '385; https://www.glassdoor.com/Reviews/Sterling-Bank-Plc-Reviews-E598064.htm'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '275', 'judging_criteria_id' => '2', 'criteria_value' => '4.3'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '275', 'judging_criteria_id' => '3', 'criteria_value' => '4.1'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '275', 'judging_criteria_id' => '4', 'criteria_value' => '4.3'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '275', 'judging_criteria_id' => '5', 'criteria_value' => '4'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '275', 'judging_criteria_id' => '6', 'criteria_value' => '4.4'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '275', 'judging_criteria_id' => '7', 'criteria_value' => '3.63'],

            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '278', 'judging_criteria_id' => '1', 'criteria_value' => '1072; https://www.glassdoor.com/Reviews/United-Bank-for-Africa-Reviews-E275472.htm'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '278', 'judging_criteria_id' => '2', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '278', 'judging_criteria_id' => '3', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '278', 'judging_criteria_id' => '4', 'criteria_value' => '3.8'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '278', 'judging_criteria_id' => '5', 'criteria_value' => '3.6'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '278', 'judging_criteria_id' => '6', 'criteria_value' => '4.1'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '278', 'judging_criteria_id' => '7', 'criteria_value' => '3.94'],

            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '283', 'judging_criteria_id' => '1', 'criteria_value' => '670; https://www.glassdoor.com/Reviews/First-Bank-of-Nigeria-Reviews-E374418.htm'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '283', 'judging_criteria_id' => '2', 'criteria_value' => '3.3'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '283', 'judging_criteria_id' => '3', 'criteria_value' => '3.4'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '283', 'judging_criteria_id' => '4', 'criteria_value' => '3.8'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '283', 'judging_criteria_id' => '5', 'criteria_value' => '3.5'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '283', 'judging_criteria_id' => '6', 'criteria_value' => '3.7'],
            ['award_program_id' => '2', 'sector_id' => '14', 'award_id' => '44', 'nominee_id' => '283', 'judging_criteria_id' => '7', 'criteria_value' => '3.6'],

            




            ['award_program_id' => '2', 'sector_id' => '13', 'award_id' => '', 'nominee_id' => '', 'judging_criteria_id' => '', 'criteria_value' => ''],
        ];
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judging_criteria_values');
    }
}
