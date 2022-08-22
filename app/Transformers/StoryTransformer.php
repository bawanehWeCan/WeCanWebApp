<?php
/**Envatic Crypto APP
* Adapted by
 *Stephen Isaac:  ofuzak@gmail.com>.
 *Skype: ofuzak
 *www.evatic.com (Deploy Scripts , Apps , coins in One click)
 */
namespace App\\Transformers;

use App\Story;
use League\Fractal\TransformerAbstract;

class StoryTransformer extends TransformerAbstract
{
    
	;

    public function transform(Story $story)
    {
        return [
            'title'=> $story->title,
            'content'=> $story->content,
        ];
    }

	

}

