<?php
/**Envatic Crypto APP
* Adapted by
 *Stephen Isaac:  ofuzak@gmail.com>.
 *Skype: ofuzak
 *www.evatic.com (Deploy Scripts , Apps , coins in One click)
 */
namespace App\\Transformers;

use App\Post;
use League\Fractal\TransformerAbstract;

class PostTransformer extends TransformerAbstract
{
    
	;

    public function transform(Post $post)
    {
        return [
            'title'=> $post->title,
            'content'=> $post->content,
            'category'=> $post->category,
        ];
    }

	

}

