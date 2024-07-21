<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Usuarios; // Asegúrate de importar el modelo correcto

class CrearUsuarioTest extends TestCase
{
    use RefreshDatabase; // Para asegurar que las pruebas no afecten la base de datos de producción

    /** @test */
    public function puede_crear_un_usuario()
    {
        $data = [
            'id' => 1,
            'nombre' => 'John',
            'apellido' => 'Doe',
            'telefono' => '123456789'
        ];

        $response = $this->post('/usuarios', $data); // Simular una solicitud POST a la ruta /usuarios

        $response->assertStatus(302); // Verificar que la respuesta sea un redireccionamiento (estatus 302)

        // Verificar que el usuario se haya creado en la base de datos
        $this->assertDatabaseHas('usuarios', [
            'id' => 1,
            'nombre' => 'John',
            'apellido' => 'Doe',
            'telefono' => '123456789'
        ]);
    }

    /** @test */
    public function puede_actualizar_usuario()
    {
        $usuario = Usuarios::factory()->create([
            'id' => 1,
            'nombre' => 'John',
            'apellido' => 'Doe',
            'telefono' => '123456789'
        ]);

        $response = $this->put("/usuarios/{$usuario->id}", [
            'nombre' => 'Nuevo Nombre',
            'apellido' => 'Nuevo Apellido',
            'telefono' => '987654321'
        ]);

        $response->assertStatus(302); // Verificar que la respuesta sea un redireccionamiento (estatus 302)

        // Verificar que el usuario se haya actualizado en la base de datos
        $this->assertDatabaseHas('usuarios', [
            'id' => $usuario->id,
            'nombre' => 'Nuevo Nombre',
            'apellido' => 'Nuevo Apellido',
            'telefono' => '987654321'
        ]);
    }

    /** @test */
    public function puede_eliminar_usuario()
    {
        $usuario = Usuarios::factory()->create([
            'id' => 1,
            'nombre' => 'John',
            'apellido' => 'Doe',
            'telefono' => '123456789'
        ]);

        $response = $this->delete("/usuarios/{$usuario->id}");

        $response->assertStatus(302); // Verificar que la respuesta sea un redireccionamiento (estatus 302)

        // Verificar que el usuario no exista en la base de datos
        $this->assertDatabaseMissing('usuarios', ['id' => $usuario->id]);
    }
}
