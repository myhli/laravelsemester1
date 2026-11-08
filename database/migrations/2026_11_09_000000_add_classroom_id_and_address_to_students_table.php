<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->foreignId('classroom_id')
                ->nullable()
                ->after('name')
                ->constrained('classrooms')
                ->nullOnDelete();
            $table->text('address')->nullable()->after('classroom_id');
        });

        DB::table('students')
            ->whereNotNull('classroom')
            ->orderBy('id')
            ->each(function (object $student): void {
                $classroomName = trim($student->classroom);

                if ($classroomName === '') {
                    return;
                }

                $classroomId = DB::table('classrooms')
                    ->where('name', $classroomName)
                    ->value('id');

                if ($classroomId === null) {
                    $classroomId = DB::table('classrooms')->insertGetId([
                        'name' => $classroomName,
                        'major' => explode(' ', $classroomName)[1] ?? 'Umum',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }

                DB::table('students')
                    ->where('id', $student->id)
                    ->update(['classroom_id' => $classroomId]);
            });

        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('classroom');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('classroom')->nullable()->after('name');
        });

        DB::table('students')
            ->join('classrooms', 'classrooms.id', '=', 'students.classroom_id')
            ->orderBy('students.id')
            ->each(function (object $student): void {
                DB::table('students')
                    ->where('id', $student->id)
                    ->update(['classroom' => $student->name]);
            });

        Schema::table('students', function (Blueprint $table) {
            $table->dropConstrainedForeignId('classroom_id');
            $table->dropColumn('address');
        });
    }
};
