<?php

class AuthControllerTest extends TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->call('GET', '/');
        echo var_dump($response->getContent());
        $this->assertResponseOk();
        /*$crawler = $this->client->request('GET', '/');
        $this->assertTrue($this->client->getResponse()->isOk());*/
    }

    public function testLogout()
    {
        // Authentification
        $this->be(User::find(1));
        $this->assertTrue(Auth::check());
        // Requête
        $response = $this->call('GET', 'auth/logout');
        // Assertions
        $this->assertTrue(Auth::guest());
        $this->assertRedirectedToRoute('index');
    }

}
