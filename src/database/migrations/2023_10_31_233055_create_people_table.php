public function up()
{
  Schema::create('people', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->integer('age');
    $table->timestamp('created_at')->useCurrent()->nullable();
    $table->timestamp('updated_at')->useCurrent()->nullable();
    $table->softDeletes();
  });
}