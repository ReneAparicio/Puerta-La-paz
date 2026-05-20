public function up()
{
    Schema::create('usuarios_admin', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('email')->unique();
        $table->string('password');
        $table->enum('rol', ['admin', 'editor', 'supervisor'])->default('editor');
        $table->timestamp('ultimo_acceso')->nullable();
        $table->boolean('activo')->default(true);
        $table->timestamps();
    });
}