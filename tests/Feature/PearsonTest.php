<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
	
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions; 

class PearsonTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   
 

    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create(){
      
        $response = $this->call('POST',
         '/api/pearson', 
         ['name'=>'teste', 'email'=>'teste@teste', 'password'=>'123456', 'image'=>'notFound', 'phone'=>'123456'] );
        
        $this->assertEquals(201, $response->status());
        $this->assertEquals($response['name'], 'teste');
        $this->assertEquals($response['email'], 'teste@teste');
        $this->assertEquals($response['password'], '123456');
        $this->assertEquals($response['image'],'notFound');
        $this->assertEquals($response['phone'],'123456');


    }

     public function test_update(){
      
        $response = $this->call('POST',
         '/api/pearson', 
         ['name'=>'teste', 'email'=>'teste@teste', 'password'=>'123456', 'image'=>'notFound', 'phone'=>'123456'] );
         $id = $response['id']; 
        
         $response_updated = $this->call('PUT',
         '/api/pearson/'.$id, 
         ['name'=>'teste2', 'email'=>'teste@teste', 'password'=>'123456', 'image'=>'notFound', 'phone'=>'123456'] );
        
         $response_updated->assertStatus(200);

         $response_finish = $this->call('GET',
         '/api/pearson/'.$response['id']);

         $this->assertEquals($response_finish['name'],'teste2');
        


    }
}
