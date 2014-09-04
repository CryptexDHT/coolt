<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;





function getColor () {
	$randomcolor = '#' . strtoupper(dechex(rand(0,10000000)));
	return $randomcolor;
}


class ReinitLinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::drop('links');

		Schema::create('links', function ($table) {
		    $table->increments('lid');
		    $table->string('color');
		    $table->string('short');
		    $table->string('title');
		    $table->string('parent');
		    // $table->timestamps();
		});

		
		DB::table('links')->insert(array(

array( 'color' => getColor () , 'short' => '', 'title' => 'Тематика', 'parent' => '' ),
/*****************************************************************************/

array( 'color' => getColor () , 'short' => 'au', 'title' => 'автомобили и транспорт', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'bi', 'title' => 'велосипеды', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'biz', 'title' => 'бизнес', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'bo', 'title' => 'книги', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'br', 'title' => 'барахолка', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'c', 'title' => 'комиксы и мультфильмы', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'cul', 'title' => 'культура', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'di', 'title' => 'столовая', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'em', 'title' => 'другие страны и туризм', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'ew', 'title' => 'конец света', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'fa', 'title' => 'мода и стиль', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'fiz', 'title' => 'физкультура', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'fl', 'title' => 'иностранные языки', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'fs', 'title' => 'фэнтези', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'ftb', 'title' => 'футбол', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'hh', 'title' => 'хип-хоп культура', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'hi', 'title' => 'история', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'me', 'title' => 'медицина', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'mg', 'title' => 'магия', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'mlp', 'title' => 'my little pony', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'mov', 'title' => 'фильмы', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'mo', 'title' => 'мотоциклы', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'mu', 'title' => 'музыка', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'ne', 'title' => 'животные и природа', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => 'pvc', 'title' => 'коллекционные фигурки', 'parent' => '0' ),
array( 'color' => getColor () , 'short' => '', 'title' => '', 'parent' => '' ),
/*****************************************************************************/

array( 'color' => getColor () , 'short' => 'po', 'title' => 'политика и новости', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 'psy', 'title' => 'психология', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 're', 'title' => 'религия и философия', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 'sf', 'title' => 'научная фантастика', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 'sci', 'title' => 'наука', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 'sn', 'title' => 'паранормальные явления', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 'sp', 'title' => 'спорт', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 'spc', 'title' => 'космос', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 'tr', 'title' => 'транспорт и авиация', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 'tv', 'title' => 'тв', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 'un', 'title' => 'образование', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 'wh', 'title' => 'warhammer', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 'wm', 'title' => 'военная техника', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 'w', 'title' => 'оружие', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => 'wrk', 'title' => 'работа и карьера', 'parent' => '1' ),
array( 'color' => getColor () , 'short' => '', 'title' => 'Творчество Техника и софт', 'parent' => '' ),
/*****************************************************************************/

array( 'color' => getColor () , 'short' => 'de', 'title' => 'дизайн', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'diy', 'title' => 'хобби', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'dom', 'title' => 'домострой', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'izd', 'title' => 'издательство', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'mus', 'title' => 'музыканты', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'o', 'title' => 'мазня', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'out', 'title' => 'активный отдых', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'pa', 'title' => 'живопись', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'p', 'title' => 'фото', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'td', 'title' => 'трёхмерная графика', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'trv', 'title' => 'путешествия', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'wp', 'title' => 'обои и высокое разрешение', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'cc', 'title' => 'криптовалюта', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'gd', 'title' => 'gamedev', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'hw', 'title' => 'железо', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'mobi', 'title' => 'мобильные устройства', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'pr', 'title' => 'программирование', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'ra', 'title' => 'радиотехника', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 's', 'title' => 'программы', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 't', 'title' => 'техника', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => 'web', 'title' => 'веб-мастера', 'parent' => '2' ),
array( 'color' => getColor () , 'short' => '', 'title' => 'Игры Японская культура', 'parent' => '' ),
/*****************************************************************************/

array( 'color' => getColor () , 'short' => 'bg', 'title' => 'настольные игры', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'cg', 'title' => 'консоли', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'gb', 'title' => 'азартные игры', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'mc', 'title' => 'minecraft', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'mmo', 'title' => 'MMO', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'moba', 'title' => 'MOBA', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'vg', 'title' => 'видеоигры', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'wr', 'title' => 'текстовые игры', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'tes', 'title' => 'the elder scrolls', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'a', 'title' => 'аниме', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'aa', 'title' => 'аниме арт', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'fd', 'title' => 'фэндом', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'ja', 'title' => 'японская культура', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'jsf', 'title' => 'japanese street fashion', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'ma', 'title' => 'манга', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'rm', 'title' => 'rozen maiden', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'to', 'title' => 'touhou', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => 'vn', 'title' => 'визуальные новеллы', 'parent' => '3' ),
array( 'color' => getColor () , 'short' => '', 'title' => 'Разное Взрослым Пробное', 'parent' => '' ),
/*****************************************************************************/

array( 'color' => getColor () , 'short' => 'b', 'title' => 'бред', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'abu', 'title' => 'абу', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'd', 'title' => 'Дискуссии о Два.ч', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'soc', 'title' => 'общение', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'r', 'title' => 'просьбы', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'media', 'title' => 'анимация', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'int', 'title' => 'international', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'chat', 'title' => 'Чат', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'old', 'title' => 'O.L.D.F.A.G', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'http:tv.2ch.hk', 'title' => '2chTV', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'fg', 'title' => 'трапы', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'fur', 'title' => 'фурри', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'g', 'title' => 'девушки', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'ga', 'title' => 'геи', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'h', 'title' => 'хентай', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'fag', 'title' => 'FAGS', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'ho', 'title' => 'прочий хентай', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'hc', 'title' => 'hardcore', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'e', 'title' => 'extreme pron', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'fet', 'title' => 'фетиш', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'sex', 'title' => 'секс и отношения', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'zog', 'title' => 'теории заговора', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'guro', 'title' => 'guro (18+)', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'ussr', 'title' => 'советский союз', 'parent' => '4' ),
array( 'color' => getColor () , 'short' => 'ukr', 'title' => 'Ukraine', 'parent' => '4' ),
));


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('links');

	}

}
