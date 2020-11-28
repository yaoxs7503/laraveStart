<?php

namespace Tests\Feature;

use App\Contact;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->withoutExceptionHandling();

        $this->post('/api/contacts',[
            'name' => 'Test Name',
            'email' => 'test@email.com',
            'birthday' => '05/14/1988',
            'company' => 'ABC String',
            ]);

        $contact=Contact::first();
        // $this->assertCount(1,Contact::all());
        // $this->assertCount(1,$contact);
        $this->assertEquals('Test Name',$contact->name);
        $this->assertEquals('test@email.com',$contact->email);
        $this->assertEquals('05/14/1988',$contact->birthday);
        $this->assertEquals('ABC String',$contact->company);

        // $response = $this->get('/');

        // $response->assertStatus(200);
    }
    public function testExample2(){
        $response=$this->post('/api/contacts',[
            'birthday' => '05/14/1988',
            'company' => 'ABC String',
        ]);


        $response->assertSessionHasErrors('name');

        $this->assertCount(0,Contact::all());
    }

    public function testExample3()
    {
    }
}
