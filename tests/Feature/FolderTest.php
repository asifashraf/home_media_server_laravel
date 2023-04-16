<?php 
# Boilerplate code for the test for folder api
namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Folder;

class FolderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_folder_index()
    {
        // get all folders from the database
        $folders = Folder::all();
        // make a get request to the folder api
        $response = $this->get('/folder');
        // assert that the response status is 200
        $response->assertStatus(200);
        // assert that the response type is json
        $response->assertJson([
            'type' => 'data'
        ]);
        // assert that the response data is equal to the folders from the database
        $response->assertJson([
            'data' => $folders
        ]);
    }
    public function test_folder_store()
    {
        // make a post request to the folder api
        $response = $this->post('/folder', [
            'folder_title' => 'test folder',
            'folder_path' => 'test folder path'
        ]);
        // assert that the response status is 200
        $response->assertStatus(200);
        // assert that the response type is json
        $response->assertJson([
            'type' => 'data'
        ]);
        // assert that the response data is equal to the folders from the database
        $response->assertJson([
            'data' => Folder::all()->last()
        ]);
    }


}