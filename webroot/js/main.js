//Carrousel topo
$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});
//slide-2
$(document).ready(function () {

    $('.btn-vertical-slider').on('click', function () {
        
        if ($(this).attr('data-slide') == 'next') {
            $('#myCarousel').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev') {
            $('#myCarousel').carousel('prev')
        }

    });
});
//Table filtro
(function(){
    'use strict';
    let $ = jQuery;
    $.fn.extend({
        filterTable: function(){
            return this.each(function(){
                $(this).on('keyup', function(e){
                    $('.filterTable_no_results').remove();
                    let $this = $(this), 
                        search = $this.val().toLowerCase(), 
                        target = $this.attr('data-filters'), 
                        $target = $(target), 
                        $rows = $target.find('tbody tr');
                        
                    if(search == '') {
                        $rows.show(); 
                    } else {
                        $rows.each(function(){
                            let $this = $(this);
                            $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
                        })
                        if($target.find('tbody tr:visible').size() === 0) {
                            let col_count = $target.find('tr').first().find('td').size();
                            let no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
                            $target.find('tbody').append(no_results);
                        }
                    }
                });
            });
        }
    });
    $('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
    // attach table filter plugin to inputs
    $('[data-action="filter"]').filterTable();
    
    $('.container').on('click', '.panel-heading span.filter', function(e){
        let $this = $(this), 
            $panel = $this.parents('.panel');
        
        $panel.find('.panel-body').slideToggle();
        if($this.css('display') != 'none') {
            $panel.find('.panel-body input').focus();
        }
    });
    $('[data-toggle="tooltip"]').tooltip();
})
//Player de musica
var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Player = function () {
    _createClass(Player, [{
        key: "volume",
        get: function get() {
            return this.audio.volume * 100;
        },
        set: function set(vol) {
            vol = Math.max(0, vol);
            vol = Math.min(100, vol);

            this.audio.volume = vol / 100;

            if (this.$volumeSlider) this.$volumeSlider.value = vol;
        }
    }, {
        key: "currentTime",
        get: function get() {
            return this.audio.currentTime;
        },
        set: function set(time) {
            this.audio.currentTime = time;
        }
    }]);

    function Player(el) {
        _classCallCheck(this, Player);

        this.audio = new Audio("");
        this.$el = el;

        this.$playlist = this.$el.querySelector(".player-playlist");
        this.$btnPrev = this.$el.querySelector(".player-prev");
        this.$btnNext = this.$el.querySelector(".player-next");
        this.$btnPlay = this.$el.querySelector(".player-play");
        this.$btnPause = this.$el.querySelector(".player-pause");
        this.$btnStop = this.$el.querySelector(".player-stop");
        this.$currentName = this.$el.querySelector(".player-current");
        this.$progress = this.$el.querySelector('.player-progress');
        this.$progressBar = this.$progress.querySelector('.player-progress-bar');
        this.$repeat = this.$el.querySelector('.player-repeat');
        this.$volumeSlider = this.$el.querySelector('.player-volume-slider');

        this.songs = [];
        this.repeat = false;
        this.$playlistItems = [];
        this.currentIndex = 0;
        this.volume = this.$volumeSlider.value || 80;

        this.updatePlaylist();
        this.bindEvents();
        this.load();
    }

    _createClass(Player, [{
        key: "updatePlaylist",
        value: function updatePlaylist() {
            this.songs = [];

            this.$playlistItems = this.$playlist.querySelectorAll("[data-src]");

            var _iteratorNormalCompletion = true;
            var _didIteratorError = false;
            var _iteratorError = undefined;

            try {
                for (var _iterator = this.$playlistItems[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
                    var item = _step.value;

                    this.songs.push({
                        name: item.innerText,
                        src: item.dataset.src
                    });
                }
            } catch (err) {
                _didIteratorError = true;
                _iteratorError = err;
            } finally {
                try {
                    if (!_iteratorNormalCompletion && _iterator.return) {
                        _iterator.return();
                    }
                } finally {
                    if (_didIteratorError) {
                        throw _iteratorError;
                    }
                }
            }
        }
    }, {
        key: "updatePlaylistClass",
        value: function updatePlaylistClass() {
            var _this = this;

            this.$playlistItems.forEach(function (el, i) {
                if (i === _this.currentIndex) {
                    return _this.$addClass(el, "player-playlist-current");
                }

                _this.$removeClass(el, "player-playlist-current");
            });

            return this;
        }
    }, {
        key: "$addClass",
        value: function $addClass(el, className) {
            var classes = el.className.split(/\s+/);

            classes.push(className);
            el.className = classes.join(' ');

            return el;
        }
    }, {
        key: "$removeClass",
        value: function $removeClass(el, className) {
            var classes = el.className.split(/\s+/);
            var index = classes.indexOf(className);

            classes.splice(index, 1);
            el.className = classes;

            return el;
        }
    }, {
        key: "load",
        value: function load(index) {
            index = index >= 0 ? index : this.currentIndex;
            this.currentIndex = index;

            var song = this.songs[index];
            this.audio.src = song.src;
            this.audio.load();
            this.$currentName.innerText = song.name;
            this.updatePlaylistClass();
        }
    }, {
        key: "play",
        value: function play(index) {
            if (this.audio.paused && index === undefined) {
                this.audio.play();
                return this;
            }

            if (index !== undefined) {
                this.load(index);
                this.audio.play();
            }

            return this;
        }
    }, {
        key: "pause",
        value: function pause() {
            this.audio.pause();

            return this;
        }
    }, {
        key: "stop",
        value: function stop() {
            this.audio.pause();
            this.audio.currentTime = 0;
        }
    }, {
        key: "prev",
        value: function prev() {

            if (this.currentIndex - 1 >= 0) {
                this.play(--this.currentIndex);
            }

            return this;
        }
    }, {
        key: "next",
        value: function next() {
            if (this.currentIndex + 1 < this.songs.length) {
                this.play(++this.currentIndex);
            }

            return this;
        }
    }, {
        key: "$on",
        value: function $on(el, ev, cb) {
            if (el) {
                el.addEventListener(ev, cb);
            }
        }
    }, {
        key: "bindEvents",
        value: function bindEvents() {
            var _this2 = this;

            this.$on(this.$btnPrev, 'click', function () {
                return _this2.prev();
            });
            this.$on(this.$btnNext, 'click', function () {
                return _this2.next();
            });
            this.$on(this.$btnPlay, 'click', function () {
                return _this2.play();
            });
            this.$on(this.$btnPause, 'click', function () {
                return _this2.pause();
            });
            this.$on(this.$btnStop, 'click', function () {
                return _this2.stop();
            });

            this.$on(this.audio, 'ended', function () {
                if (_this2.repeat) {
                    _this2.play();
                } else {
                    _this2.next();
                }
            });

            //Volume
            this.$on(this.$volumeSlider, 'input', function (e) {
                _this2.volume = +e.target.value;
            });

            // Repetir
            this.$on(this.$repeat, 'change', function (e) {
                _this2.repeat = e.target.checked;
            });

            // Barra de progresso
            this.$on(this.audio, 'timeupdate', function (e) {
                _this2.$progressBar.style.width = _this2.audio.currentTime / _this2.audio.duration * 100 + '%';
            });

            // Selecionar item da playlist
            this.$playlistItems.forEach(function (el, i) {
                console.log(el);
                _this2.$on(el, 'click', function () {
                    return _this2.play(i);
                });
            });
        }
    }]);

    return Player;
}();

/////////////////////////

var player = new Player(document.getElementById("meuplayer"));

//Formulário contato
$(document).ready
(
    function()
    {  
        $('#btnenviar').click
        (
            function(e)
            {   
                $inNome     =$('#txtinputnome');
                $inEmail    =$('#txtinputemail');
                $inAssunto  =$('#txtinputassunto');
                $inArea     =$('#txtinputarea');
                $btnEnviar  =$('#btnenviar');
                
                let emailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                let latinformat=/[^a-zA-Z\-\'\ ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏàáâãäåæçèéêëìíîïÐÑÒÓÔÕÖØÙÚÛÜÝÞßðñòóôõöøùúûüýþÿ]/i;
                
                if($inNome.val().length<=2 || latinformat.test($inNome.val()))
                {
                    e.preventDefault();
                    $('#txtinputnome + span').toggle().html("Informe um nome válido !");
                    $inNome.focus();                 
                }
                else if(!emailformat.test($inEmail.val()))
                {
                    e.preventDefault();
                    $('#txtinputemail + span').toggle().html("Informe um e-mail válido !");
                    $inEmail.focus();                 
                }
                else if($inAssunto.val().length<=2 || !latinformat.test($inAssunto.val()))
                {
                    e.preventDefault();
                    $('#txtinputassunto + span').toggle().html("Informe um assunto válido !");
                    $inAssunto.focus();                 
                }
                else if($inArea.val().length<=2 || !latinformat.test($inArea.val()))
                {
                    e.preventDefault();
                    $('#txtinputarea + span').toggle().html("Informe uma mensagem válida !");
                    $inArea.focus();                 
                }
            }            
        )
    }
);