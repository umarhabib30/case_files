<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pdf_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entry_id')->constrained('entries')->onDelete('cascade');
            $table->string('acquisition_plan')->nullable();
            $table->string('title_deed')->nullable();                 // Path to Title Deed PDF
            $table->string('sg_diagram')->nullable();                 // Path to SG Diagram PDF
            $table->string('agreement')->nullable();                  // Path to Agreement PDF
            $table->string('contact_details')->nullable();            // Path to Contact Details PDF
            $table->string('cancellation_document')->nullable();      // Path to Cancellation Document PDF
            $table->string('beacon_certificate')->nullable();         // Path to Beacon Certificate PDF
            $table->string('signed_agreement_pdf')->nullable();           // Path to Signed Agreement PDF
            $table->string('owners_particulars')->nullable();         // Path to Owners Particulars PDF
            $table->string('banking_details')->nullable();            // Path to Banking Details PDF
            $table->string('resolution')->nullable();                 // Path to Resolution PDF
            $table->string('letter_of_entitlement')->nullable();      // Path to Letter of Entitlement PDF
            $table->string('id_document')->nullable();                // Path to ID PDF
            $table->string('vat_certificate')->nullable();            // Path to VAT Certificate PDF
            $table->string('final_offer')->nullable();                // Path to Final Offer PDF
            $table->string('failed_negotiation_report')->nullable();  // Path to Failed Negotiation Report PDF
            $table->string('valuation_certificate')->nullable();      // Path to Valuation Certificate PDF
            $table->string('valuation_report')->nullable();           // Path to Valuation Report PDF
            $table->string('memo_pack')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdf_files');
    }
};
