/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

(function($){
    $('figure.wp-caption.aligncenter').removeAttr('style');
    $('img.aligncenter').wrap('<figure class="centered-image" />');
}) (jQuery);
