$(document).ready(function() {

    
    $('.project__filter-block').on('click', 'span',function(){
        var $this=$(this);                                  //Объект клика заносим в переменную
        var postname=$this.attr('data-namecat');            //Переменная слага категории
        var numba_iter=$this.attr('data-iter');             //Номер итерации
        var tag='';                                         //Переменная, содержащая запрос
        var classIter='.iter_'+String(numba_iter);          //Генерируем класс итерации вывода результата - что бы потом обратится к нему
        var cuntIter='.count_'+String(numba_iter)+' span';
        var count_post='.count_post_'+String(numba_iter); 

        if ($this.attr('class') == 'project__filter project__filter_disabled' ){ //Меняем класс активной кнопки
            $this.attr('class','project__filter');
        } else {
            $this.attr('class','project__filter project__filter_disabled');   
        }

        $this.parent().children().each(function (){            //Генерируем запрос
            var dataclass=$(this).attr('class');
            var tagparent = $(this).attr('data-tag');
            if (dataclass == 'project__filter'){
                tag+=tagparent;
                tag+="+";
            }
        });

        if (tag[tag.length-1] == '+') {tag=tag.slice(0, -1);}   //Удаляем символ + в конце запроса

        var fomatData = {                                       //Компануем данные запроса ajax
                action : 'myfilter',
                name : postname,
                tagname : tag,
                iter : numba_iter
            };
        $.ajax({                                            //Делаем запрос ajax
			url : true_obj.ajaxurl, // обработчик
			data : fomatData, // данные
			type : 'POST', // тип запроса
			success : function( data ){
				$( classIter ).html(data);
                var dt=$(count_post).attr('data-cont-post');
                $(cuntIter).html(dt);
			}
		});         
    }); // Конец click
});//  конец ready