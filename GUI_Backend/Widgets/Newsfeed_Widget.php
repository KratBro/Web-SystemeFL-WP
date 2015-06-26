<?php
/**
 * Created for doku_mummy-plugin.
 * User: Jan
 * Date: 26.06.2015
 * Time: 14:05
 */

class Newsfeed_Widget extends CustomWidget{

    private $sJavascript =<<<HTML
function newsBuilder() {
	var socket;


	function init() {
		socket = io.connect('http://192.168.56.103:8080');

		socket.on('connect', function ()
		{

			getNewsfeed();
			/**
			 * Kompletter Newsfeed wird erstetzt
			 * Wird ausgelöst, wenn man Räumen begetreten ist.
			 * NodeJs ruft DatenBank Newsfeed ab.
			 */
			socket.on(
				'newsFeed',
				function (msg) {
					console.log(msg.rows);
					buildNews(msg.rows);
				}
			);
		});
	}
	init();

	function getNewsfeed() {
		socket.emit(
			'giveNewsFeed'
		);

		var timer = window.setTimeout(getNewsfeed, 10000);
	}

	function buildNews(data) {
		var newsContainer = document.querySelector(".newsFeed");
		newsContainer.innerHTML = "";

		for (var i = 0; i < data.length; i++) {
			addNews(data[i].news);
		};
	}
	function addNews(data) {
		var newsContainer = document.querySelector(".newsFeed");
		newsContainer.innerHTML = newsContainer.innerHTML +  "<p>" + data + "</p>";
	}
}
newsBuilder();



HTML;



    public function __construct(){
        parent::__construct('newsfeed_widget', 'Newsfeed');
    }

    /**
     * Die Callbackfunktion des Widgets. Nur diese Funktion muss implementiert werden.
     * @return mixed
     */
    public function widget_content()
    {
        echo '<div class="newsFeed"></div>';
        echo '<script>'.$this->sJavascript.'</script>';
    }

}