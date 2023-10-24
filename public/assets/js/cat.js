$('#is_man .selection-categories-list input').on('change', function () { if ($('#is_man .selection-categories-list  input:checked').length == 3) { for (var i = 0; i < $('#is_man .selection-categories-list  input:not(:checked)').length; i++) { $($('#is_man .selection-categories-list input:not(:checked)')[i]).attr('disabled', true); } } else { for (var i = 0; i < $('#is_man .selection-categories-list  input').length; i++) { $($('#is_man .selection-categories-list  input')[i]).removeAttr('disabled', false); } } })
$('#collapseOne .selection-categories-list input').on('change', function () { if ($('#collapseOne .selection-categories-list  input:checked').length == 3) { for (var i = 0; i < $('#collapseOne .selection-categories-list input:not(:checked)').length; i++) { $($('#collapseOne .selection-categories-list input:not(:checked)')[i]).attr('disabled', true); } } else { for (var i = 0; i < $('#collapseOne .selection-categories-list input').length; i++) { $($('#collapseOne .selection-categories-list input')[i]).removeAttr('disabled', false); } } })
function toast(dom, text) { dom.find('.toast-text').html(text); dom.find('.alert-local').css("display", 'flex'); dom.find('.alert-local').animate({ opacity: 1 }, 500); let timer = setTimeout(function () { clearTimeout(timer); dom.find('.alert-local').css("display", 'none'); dom.find('.alert-local').animate({ opacity: 0 }); }, 2000) }
$('#collapseOne .selection-categories-list label').on('click', function () { if ($(this).prev().attr('disabled') == "disabled") { toast($('#collapseOne'), "Please cancel at least one category first."); } })
function getPreferances() {
    $.ajax({
        url: 'amazon/preferences', type: 'get', dataType: 'json', success: function (data) {
            if (data && data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                    let str = data[i]; if (str.indexOf("&amp;") > -1) { let arr = str.split("&amp;"); str = $.trim(arr[0]); } else if (str.indexOf("&") > -1) { let arr = str.split("&"); str = $.trim(arr[0]); }
                    $('[data-updata="' + str + '"]').find('input').attr('checked', true);
                }
                if (data.length >= 3) { for (var i = 0; i < $('#collapseOne .selection-categories-list input:not(:checked)').length; i++) { $($('#collapseOne .selection-categories-list input:not(:checked)')[i]).attr('disabled', true); } }
                if (data.length == 0) { a = 0; page = 0; }
            }
        }
    })
}
getPreferances(); $('.panel-reset').on("click", function () {
    for (var i = 0; i < $('#collapseOne .selection-categories-list input').length; i++) { $($('#collapseOne .selection-categories-list input')[i]).removeAttr('checked'); }
    for (var i = 0; i < $('#collapseOne .selection-categories-list input').length; i++) { $($('#collapseOne .selection-categories-list input')[i]).removeAttr('disabled'); }
})
$('#is_man .modal-content .like-categories .btns>.btn:first-child').on('click', function () { $('#is_man .modal-content .like-categories').hide(); $($('#is_man .modal-content>.first-guide')[0]).show(); }); $($('#is_man .modal-content>.first-guide .next')[0]).on('click', function () { $($('#is_man .modal-content>.first-guide')[0]).hide(); $($('#is_man .modal-content>.first-guide')[1]).show(); })
$($('#is_man .modal-content>.first-guide .next')[1]).on('click', function () { $('#is_man').modal('hide'); })
$('#is_man .modal-content .like-categories .btns>.btn:last-child').on('click', function () {
    let arrayGroup = []; for (var i = 0; i < $('#is_man .selection-categories-list input:checked').length; i++) { arrayGroup.push($($('#is_man .selection-categories-list input:checked')[i]).parent().attr('data-value')); }
    upDataLike(arrayGroup, true); $('#is_man .modal-content .like-categories').hide(); $($('#is_man .modal-content>.first-guide')[0]).show();
}); $('.panel-submit').on('click', function () {
    let arrayGroup = []; for (var i = 0; i < $('#collapseOne .selection-categories-list input:checked').length; i++) { arrayGroup.push($($('#collapseOne .selection-categories-list input:checked')[i]).parent().attr('data-value')); }
    if (arrayGroup.length > 0) { a = 1 }
    upDataLike(arrayGroup); $("#collapseOne").collapse('hide'); $('.more').css("display", "block"); $('.more .see-more').css("display", "block");
}); function refreshPersonalized() {
    let html = "<div style=\"display: flex;justify-content: center;align-items: center;height:100px;width: 100%;\"><img\n" +
        "style=\"width:30px;\" src=\"https://vipon.s3.amazonaws.com/img/452004003c36249b5456fb551d846eb2095ff2e8230810.gif\" alt=\"\">\n" +
        "                </div>"; $('.personalized-list').html(html); $.ajax({
            url: 'main/switch-personalized', type: 'get', dataType: 'json', success: function (data) {
                if (data.code == 200) { handleData(data.data, $('.personalized-list'), 'person', 1); } else { handleData(personalizedDealsData, $('.personalized-list'), 'person', 1); }
                $('.personalized > .more .btn').css('display', "");
            }
        })
}
$('img').error(function () { $(this).attr('src', "https://vipon.s3.amazonaws.com/img/256333531c371ff458e98e45dfc068667f7206b0418731.png"); }); function add_collection(product_id, now_document) { $.ajax({ url: "wish/add", type: 'get', data: { product_id: product_id }, error: function (error) { }, success: function (data) { if (data.code == '200') { now_document.find('span').attr('class', "favorites-icon"); now_document.find('a').attr('title', "Remove from my favorites"); } } }); }
function cache_collection(product_id, now_document) { $.ajax({ url: "wish/delete", type: 'get', data: { product_id: product_id }, error: function (error) { }, success: function (data) { if (data.code == 200) { now_document.find('span').attr('class', "favoritesed-icon"); now_document.find('a').attr('title', "Save to my favorites"); } } }); }
function favorites() {
    $('.box  .favorites').unbind(); $('.box  .favorites').on('click', function (e) {
        e.preventDefault(); e.stopPropagation(); if (login <= 0) { window.location.href = 'account/login'; return; }
        if ($(this).find('span').hasClass('favoritesed-icon')) { add_collection($(this).attr('data-id'), $(this)); } else { cache_collection($(this).attr('data-id'), $(this)); }
    })
}
$('.categories-list>span').on('click', function () { $('.categories-list>div').css('display', 'block'); })
$('.categories-list>div.modal-layer').on('click', function () { $('.categories-list>div').css('display', ''); })
$('.categories-list>div a').on('click', function (e) { e.preventDefault(); window.open($(this).attr('href')); $('.categories-list>div').css('display', ''); })
$("#myCarousel").carousel('cycle'); $('#myCarousel12').carousel('pause'); $('#carousel-example-generic').carousel('pause'); $("#myCarousel1").carousel('pause'); $("#myCarousel2").carousel('pause'); $("#myCarousel3").carousel('pause'); $("#myCarousel4").carousel('pause'); function removeBindClick() { $('.hover-show a').unbind(); $('.hover-show a').on('click', function (e) { window.event ? window.event.cancelBubble = true : e.stopPropagation(); }) }
function countNumber() {
    let width = parseInt($('.trending-list').css('width')); if (width <= 0) { width = parseInt($('.latest-list').css('width')); }
    if (width <= 0) { width = parseInt($('.under-list').css('width')); }
    let number = Math.floor(width / 220); if (number <= 0) return; let magin = (width - number * 220) / 2; magin = (magin - 1) > 0 ? (magin - 1) : 0; $('.personalized-list').css({ 'padding-left': magin, 'padding-right': magin }); $('.under-list').css({ 'padding-left': magin, 'padding-right': magin }); $('.latest-list').css({ 'padding-left': magin, 'padding-right': magin }); $('.trending-list').css({ 'padding-left': magin, 'padding-right': magin }); $('.give-away-modal-list').css({ 'padding-left': magin, 'padding-right': magin }); $('.featureed #myCarousel12').css({ 'padding-left': magin, 'padding-right': magin }); $('.h3-title ul').css({ 'margin-left': magin + 10, "margin-right": magin + 10 }); $('#collapseOne').css({ 'padding-left': magin + 10, 'padding-right': magin + 10 }); $('.more').css('padding-left', magin + 10); $('.sale').css('margin-left', magin + 10); getBoxNumberHtml('myCarousel1', 271, bestDiscount, getBestDiscountHtml, 'discount'); getBoxNumberHtml('myCarousel12', 220, featuredDealsData, getFeaturedDealsHtml, 'fd'); $('.post-list').css({ 'padding-left': magin + 10, 'padding-right': magin + 10 }); let timer = setTimeout(() => { handlePost(); clearTimeout(timer); }, 300)
    return number;
}
window.onresize = function () { countNumber(); }
function getBoxNumberHtml(borderId, boxWidth, array, fun, f) {
    if ($('#container-body .container-right').css('display') == 'none') { $('.best .best-list-product').css('margin-left', $('.best h3 ul').css('margin-left')); } else { $('.best .best-list-product').css('margin-left', ''); }
    if (borderId == 'myCarousel1' && array.length < 4) { $('.best').hide(); return; }
    if (borderId == 'myCarousel12' && array.length <= 0) { $('.featureed').hide(); }
    if (array.length <= 0 || !$.isArray(array)) return; let getScreenWidth = parseInt($('#' + borderId).css('width')); let paddingLeft = parseInt($('#' + borderId).css('padding-left')); let paddingRight = parseInt($('#' + borderId).css('padding-Right')); getScreenWidth = getScreenWidth - paddingLeft - paddingRight; let number = parseInt(getScreenWidth / boxWidth); if (borderId == 'myCarousel1') { number = (getScreenWidth + 12) / (boxWidth + 12); }
    number = Math.floor(number)
    let html = ''; let length = array.length; if (borderId == 'myCarousel12' && length > 0) { if (array[0].product_id) { array.unshift({}); length += 1; } }
    if (number <= 0) return; var imgSrc = this.getCookie('fd-img'); for (let i = 0; i < length; i += number) {
        if (i == 0) { html += '<div class="item active">'; } else { html += '<div class="item">'; }
        for (let k = i; k < (number + i); k++) {
            if (k < array.length) {
                if (borderId == 'myCarousel12') {
                    if (k == 0) {
                        html += "<div class=\"more-featured\">\n" +
                            "        <img src=\"" + imgSrc + "\" alt=\"\"/>\n" +
                            "    <a href=\"https://play.google.com/store/apps/details?id=com.vipon\" target='_blank' class='more-featured-google'  rel='nofollow' onclick=\"app_click(15,4)\">\n" +
                            "        <img src='https://vipon.s3.amazonaws.com/img/133576ae40c08c5f5a9a93bc409001e6d144fcc4480d40.svg' alt=\"\"/>\n" +
                            "    </a>\n" +
                            "    <a href=\"https://apps.apple.com/us/app/vipon-amazon-coupon/id1272023223\" target='_blank' class='more-featured-ios' rel='nofollow' onclick=\"app_click(14,1)\">\n" +
                            "        <img src='https://vipon.s3.amazonaws.com/img/993101d30f027821748473e8291cfffed1296ca66d27c7.svg' alt=\"\"/>\n" +
                            "    </a>\n" +
                            "</div>";
                    } else { html += fun(array[k], f, 1); }
                } else { html += fun(array[k], f); }
            }
        }
        html += '</div>';
    }
    $('#' + borderId + ' .carousel-inner').html(html); if (borderId == 'myCarousel1') { let margin = getScreenWidth - boxWidth * number - (number - 1) * 15; if ((margin - 12) > 0) margin = margin - 12; $('#myCarousel1 .right').css('right', margin); }
    removeBindClick(); favorites();
}
function getFeaturedDealsHtml(value, f, featureed, giveaway) {
    let module; let detail; switch (f) {
        case 'hot': module = 2
            detail = 'hot_web_detail'
            break
        case 'person': module = 3
            detail = 'default_web_detail'
            break
        case 'latest': module = 4
            detail = 'latest_web_detail'
            break
        case 'under': module = 5
            detail = 'under_web_detail'
            break
        case 'default': module = 1
            detail = 'default_web_detail'
            break
        case 'fd': module = 8
            detail = 'fd_web_detail'
            break
        default: module = 1
            detail = ''
    }
    let html1 = "<div class=\"box solid\" style=\"display: inline-block;\" id=\"product-6557202\" data-id=\"6557202\" data-product-id=" + value.product_id + " data-module=" + module + ">\n"; if (giveaway && value.is_giveaway) { html1 += "<img class='give-away-left-top'  src=\"/images/main/marker_giveaway.svg\" alt=\"Amazon Coupons\">\n" }
    html1 += "            <div class=\"box-img\">\n"; if (featureed) { html1 += "<img  src=\"" + value.image_large + "\" alt=\"Amazon Coupons\">\n" } else { html1 += "<img class=\"lazy\" data-original=\"" + value.image_large + "\"  src=\"https://vipon.s3.amazonaws.com/img/256333531c371ff458e98e45dfc068667f7206b0418731.png\" alt=\"\">\n" }
    html1 += "            </div>\n"; html1 += "<div class='favorites-get-code flex'>"; if (login > 0) {
        if (value.single_voucher == 2) { html1 += '<a href="/product/toamazon?id=' + value.product_id + '&f=' + f + '" onClick="GetCoupon(event)" class="btn" target="_blank">See Deal</a>'; } else { if (giveaway && value.is_giveaway) { html1 += '<a onClick="giveawayGetCode(event,' + value.product_id + ')" class="btn" style="cursor: pointer;background:linear-gradient(180deg,rgba(215,74,116,1) 0%,rgba(251,146,0,1) 100%);border: 0;line-height: 26px;height: 26px">Enter to Win</a>'; } else { html1 += '<a href="/code/get-code?id=' + value.product_id + '&f=' + f + '" onClick="GetCoupon(event)" class="btn" target="_blank">GET COUPON</a>'; } }
        html1 += "            <div class=\"favorites\" id=\"product-" + value.product_id + "\" data-id=\"" + value.product_id + "\">\n"; if (value.collection == 1) {
            html1 += " <a title=\"Remove from my favorites\" href=\"#\" data-id=\"" + value.product_id + "\">\n" +
                "  <span class=\"favorites-icon\"></span>\n" +
                " </a>\n";
        } else {
            html1 += " <a title=\"Save to my favorites\" href=\"#\" data-id=\"" + value.product_id + "\">\n" +
                "  <span class=\"favoritesed-icon\"></span>\n" +
                " </a>\n";
        }
        html1 += "                            </div>\n";
    } else {
        if (giveaway && value.is_giveaway) { html1 += '<a href="account/login" onClick="stopClick()" class="btn" target="_blank" style="cursor: pointer;background:linear-gradient(180deg,rgba(215,74,116,1) 0%,rgba(251,146,0,1) 100%);border: 0;line-height: 26px;height: 26px">Enter to Win</a>'; } else { html1 += '<a href="account/login" onClick="stopClick()" class="btn" target="_blank">' + (value.single_voucher == 2 ? "See Deal" : "GET COUPON") + '</a>'; }
        html1 += "            <div class=\"favorites\" id=\"product-" + value.product_id + "\" data-id=\"" + value.product_id + "\">\n"; if (value.collection == 1) {
            html1 += " <a title=\"Remove from my favorites\" href=\"#\" data-id=\"" + value.product_id + "\">\n" +
                "  <span class=\"favorites-icon\"></span>\n" +
                " </a>\n";
        } else {
            html1 += " <a title=\"Save to my favorites\" href=\"#\" data-id=\"" + value.product_id + "\">\n" +
                "  <span class=\"favoritesed-icon\"></span>\n" +
                " </a>\n";
        }
        html1 += "                            </div>\n";
    }
    html1 += "</div>"; html1 += "            <div class=\"decoration\">\n" +
        "                            <div class=\"line\"></div>\n" +
        "                            <div class=\"ball\">\n" +
        "                    <div></div>\n" +
        "                    <div></div>\n" +
        "                </div>\n" +
        "            </div>\n" +
        "            <div class=\"content-text\">\n" +
        "                <div class=\"content-text-group\">\n"; if (value.activity_tag_name) {
            html1 += "<span class=\"content-activity-outer\">\n" +
                "    <span class=\"content-activity-img\" style=\"background:url(/images/activity_lable_left.png)no-repeat center /100% 100%\"></span>\n" +
                "    <span class=\"content-activity-bg\">" + value.activity_tag_name + "</span>\n" +
                "   <span class=\"content-activity-img\" style=\"background:url(/images/activity_lable_right.png)no-repeat center /100% 100%\"></span>\n" +
                "</span>\n";
        }
    html1 += "                    <span class=\"name name-text\">" + value.art_name + "</span>\n" +
        "\n" +
        "                </div>\n" +
        "                <div class=\"content-text-group\">\n" +
        "                    <div class=\"name name-fba\">\n" +
        "                        <img class=\"\" src=\"" + value.flag + "\" alt=\"Amazon Coupons\">\n" +
        "                        <span class=\"fba\">\n" +
        "                        " + (value.fba == "FBA" ? "Fulfilled by Amazon" : "Fulfilled by Merchant") + "</span>\n" +
        "                    </div>\n" +
        "                </div>\n" +
        "                <div class=\"content-text-group\">\n" +
        "<div class='content-text-group-price-discound'>" +
        "                    <s class=\"price\">" + value.price_format + "</s>\n" +
        "                    <div class=\"discound\">-" + value.discount_display + "</div>\n" +
        "            </div>\n" +
        "                    <span class=\"discound-price\">" + value.final_price_format + "</span>\n" +
        "                </div>\n" +
        "<div class=\"content-text-group\">\n" +
        "<div class=\"comment-group\">            " +
        "<span class=\"thumb-group-icon\"></span>\n" +
        "<span class=\"comment-group-num\">" + value.up + "</span>\n" +
        "  </div>\n" +
        "<div class=\"comment-group\">            " +
        "<span class=\"comment-group-icon\"></span>\n" +
        "<span class=\"comment-group-num\">" + value.comment_num + "</span>\n" +
        "  </div>\n" +
        "</div>" +
        "            </div>\n" +
        "\n" +
        "                    <div class=\"layer\" onclick=\"getDetail('" + value.share_url + "','" + detail + "')\">\n"; html1 += "<div>View Details <span></span></div>\n" +
            "</div>\n" +
            "</div>"; return html1;
}
function getBestDiscountHtml(value, f) {
    let html = '<div class="box1" data-module="6" data-product-id=' + value.product_id + '>' +
        '<a href="' + value.share_url + '&f=' + f + '" target="_blank">' +
        '<div class="save">' +
        '<span>-' + value.discount_display + '</span>' +
        '</div>' +
        '<div class="box1-body">' +
        '<div class="box-content">' +
        '<div class="name">' + value.art_name + '</div>' +
        '<div class="mailing">' +
        '<img src="' + value.flag + '" alt="Amazon Coupons">' +
        '<span>' + (value.fba == "FBA" ? "Fulfilled by Amazon" : "Fulfilled by Merchant") + '</span>' +
        '</div>' +
        '<s class="price">' + value.price_format + '</s>' +
        '<div class="price-discound">' + value.final_price_format + '</div>' +
        '</div>' +
        '<div class="box-img">' +
        '<img src="' + value.image_large + '" alt="Amazon Coupons">' +
        '</div>' +
        '</div>' +
        '</a>' +
        '</div>'
    return html;
}
$(function () { getBoxNumberHtml('myCarousel1', 271, bestDiscount, getBestDiscountHtml, 'discount'); getBoxNumberHtml('myCarousel12', 220, featuredDealsData, getFeaturedDealsHtml, 'fd'); })
function GetCoupon(e) { window.event ? window.event.cancelBubble = true : e.stopPropagation(); fbq('track', 'Get Coupon'); }
removeBindClick(); function stopClick(e) { window.event ? window.event.cancelBubble = true : e.stopPropagation(); }
function getDetail(url, f) {
    switch (f) {
        case "person": clickRecord(6)
            break
        case "default": clickRecord(210)
            break
    }
    window.open(url + "&f=" + f);
}
$(document).on('scroll', function () {
    if ($(document).scrollTop() > ($('.weekly')[0].offsetTop + parseInt($('.weekly').css('height'))) && $(document).scrollTop() < ($('#footer')[0].offsetTop - document.documentElement.clientHeight)) { if ($('.weekly').css('position') != 'fixed') { $('.weekly').css({ 'position': 'fixed' }); $('.weekly-list').css({ 'height': "calc(100vh - 150px)", 'overflow-y': 'scroll' }); } }
    if ($(document).scrollTop() == 0 || $(document).scrollTop() >= ($('#footer')[0].offsetTop - document.documentElement.clientHeight)) { if ($('.weekly').css('position') == 'fixed') { $('.weekly').css({ 'position': '', }); $('.weekly-list').css({ height: '', 'overflow-y': 'auto' }); } }
})
function banner_click(banner_id) { $.ajax({ url: "main/banner-click", type: 'post', data: { banner_id: banner_id }, error: function (error) { }, success: function (data) { } }); }
function handleData(data, id, f, noImg, giveaway) {
    if (data.length <= 0) { id.parent().css('display', 'none'); }
    let html = ''; for (let i = 0; i < data.length; i++) { let value = data[i]; if (noImg) { html += getFeaturedDealsHtml(value, f, 1); } else if (giveaway) { html += getFeaturedDealsHtml(value, f, false, giveaway); } else { html += getFeaturedDealsHtml(value, f); } }
    id.html(html); removeBindClick(); favorites(); let number = countNumber(); if (!giveaway) { if (data.length <= (number * 3)) { id.parent().find('.more').css('display', 'none'); } else { for (let i = (number * 3); i < id.find('.box').length; i++) { $(id.find('.box')[i]).css('display', 'none') } } }
}
$('.more .see-more').on('click', function () {
    if ($(this).parent().find('.close-more').length > 0) { $(this).parent().find('.close-more').css('display', 'flex') } else { $(this).parent().find('.close-more').css('display', 'block'); }
    $(this).css('display', 'none'); $(this).parent().parent().find('.box').css('display', 'inline-block');
})
$("#activeDirector a").on('click', function () { window.open($(this).attr("data-href")); app_click(1, 5); })
function handlePost() {
    let widthScreen = parseInt($('body').width()); let width = parseInt($('.post-list').css('width')) - 1 - parseInt($('.post-list').css('padding-left')) * 2; if (widthScreen > 992) { $('.post-list-item').css({ 'width': width / 3 - 10, height: width / 6 - 5, 'margin-top': '' }); $($('.post-list-item')[0]).css({ 'width': 2 * width / 3, height: width / 3 }); } else { $('.post-list-item').css({ 'width': width, height: width / 2, 'margin-top': 10 }); $($('.post-list-item')[0]).css({ 'margin-top': 0 }); }
    let timer = setTimeout(function () {
        clearTimeout(timer)
        for (let i = 0; i < $('.post-list-item>div').length; i++) { if ($($('.post-list-item>div')[i]).find('video').length > 0) { getImgSize($($('.post-list-item>div')[i]).find('.poster-img').find('img'), 2) } else { getImgSize($($('.post-list-item>div')[i]).find('img'), 2) } }
    }, 300)
}
$('.post-list-item .post-list-item-video button').on('click', function () {
    if ($(this).parent().find('.poster-img').css('display') != 'none') { $(this).parent().find('.poster-img').css('display', 'none') }
    if (!$(this).parent().find('video')[0].paused) { $(this).parent().find('video')[0].pause(); $($(this).find('img')[0]).css('display', 'block'); $($(this).find('img')[1]).css('display', 'none'); $(this).parent().removeClass('video-play'); } else { $(this).parent().find('video')[0].play(); $($(this).find('img')[0]).css('display', 'none'); $($(this).find('img')[1]).css('display', 'block'); $(this).parent().addClass('video-play'); if ($(this).parent().find('.poster-img').attr('data-num')) { take_notes($(this).parent().find('.poster-img').attr('data-num')); } }
    if ($(this).parent().find('video').attr('data-num')) { clickRecord($(this).parent().find('video').attr('data-num')); $(this).parent().find('video').removeAttr('data-num') }
})
$('.post-list-item .post-list-item-video video source').on('error', function () { $(this).parents('.post-list-item-video').find('.video-error').css('display', 'flex'); $(this).parents('.post-list-item-video').find('.poster-img').css('display', 'none'); $(this).parents('.post-list-item-video').find('button').css('display', 'none').unbind(); $(this).parents('.post-list-item-video').find('video').unbind(); })
$('.post-list-item .post-list-item-video video').on('click', function () { playVideo(this); })
$('.post-list-item .post-list-item-video .poster-img').on('click', function () { playVideo(this); if ($(this).parent().find('video').attr('data-num')) { clickRecord($(this).parent().find('video').attr('data-num')); $(this).parent().find('video').removeAttr('data-num') } })
function playVideo(This) {
    if ($(This).parent().find('.poster-img').css('display') != 'none') { $(This).parent().find('.poster-img').css('display', 'none') }
    if ($(This).parent().find('video')[0].paused) { $(This).parent().find('video')[0].play(); $($(This).parent().find('button').find('img')[0]).css('display', 'none'); $($(This).parent().find('button').find('img')[1]).css('display', 'block'); $(This).parent().addClass('video-play'); if ($(This).parent().find('.poster-img').attr('data-num')) { take_notes($(This).parent().find('.poster-img').attr('data-num')); } }
}
function take_notes(id) { $.ajax({ url: "article/add-views", type: 'post', dataType: 'json', data: { id: id, }, success: function (data) { }, error: function (err) { } }); }
$('.post-list-item .post-list-item-datail .post-list-item-author .post-list-item-author-img').on('click', function (e) { e.preventDefault(); window.open('/disclose/my-center?type=1&page=1&limit=12&b_reviewer_id=' + $(this).attr('data-id')); })
$('.affiliate button').on('click', function (e) { e.preventDefault(); $('.affiliate').hide().attr('data-no', '1') })
function getCookie(cname) {
    var name = cname + "="; var ca = document.cookie.split(';'); for (var i = 0; i < ca.length; i++) { var c = ca[i].trim(); if (c.indexOf(name) == 0) { return unescape(c.substring(name.length, c.length)) } }
    return '';
}
