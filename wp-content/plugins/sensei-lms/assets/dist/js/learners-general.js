!function(e){var r={};function t(n){if(r[n])return r[n].exports;var o=r[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,t),o.l=!0,o.exports}t.m=e,t.c=r,t.d=function(e,r,n){t.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:n})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,r){if(1&r&&(e=t(e)),8&r)return e;if(4&r&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(t.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&r&&"string"!=typeof e)for(var o in e)t.d(n,o,function(r){return e[r]}.bind(null,o));return n},t.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(r,"a",r),r},t.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},t.p="",t(t.s=431)}({431:function(e,r){jQuery(document).ready((function(e){jQuery.fn.exists=function(){return this.length>0},jQuery(".edit-start-date-date-picker").datepicker({dateFormat:"yy-mm-dd"}),jQuery(document).tooltip({items:".sensei-tooltip",tooltipClass:"sensei-ui-tooltip",content:function(){return jQuery(this).data("tooltip")}}),jQuery("#course-category-options").on("change","",(function(){var e="course_cat="+jQuery(this).val();jQuery.post(ajaxurl,{action:"get_redirect_url_learners",data:e,security:window.woo_learners_general_data.course_category_nonce},(function(e){""!=e&&(window.location=e)}))})),e(".edit-start-date-submit").click((function(){var r=e(this),t=r.prev(".edit-start-date-date-picker").val(),n=r.attr("data-user-id"),o=r.attr("data-post-id"),a=r.attr("data-post-type"),s=r.attr("data-comment-id"),i="";n&&o&&a&&t&&s&&(i+="user_id="+n,i+="&post_id="+o,i+="&post_type="+a,i+="&new_date="+t,i+="&comment_id="+s,e.post(ajaxurl,{action:"edit_date_started",data:i,security:window.woo_learners_general_data.edit_date_nonce},(function(e){e&&location.reload()})))})),jQuery(".learner-action").click((function(e){var r=jQuery(this).attr("data-action"),t=jQuery(this).attr("data-provider"),n={withdraw:{message:window.woo_learners_general_data.remove_from_course_confirm,eventName:"learner_management_remove_enrollment"},enrol:{message:window.woo_learners_general_data.enrol_in_course_confirm,eventName:"learner_management_enroll"},restore_enrollment:{message:window.woo_learners_general_data.restore_enrollment_confirm,eventName:"learner_management_restore_enrollment"}}[r];if(void 0!==n){var o=n.message;if(confirm(o)){var a=t?{provider:t}:null;window.sensei_log_event(n.eventName,a)}else e.preventDefault()}})),jQuery(".learner-async-action").click((function(e){var r="",t=jQuery(this).attr("data-user-id"),n=jQuery(this).attr("data-post-id"),o=jQuery(this).attr("data-post-type"),a=jQuery(this).attr("data-action"),s=window.woo_learners_general_data.remove_generic_confirm,i={remove_progress:{lesson:window.woo_learners_general_data.remove_from_lesson_confirm,course:window.woo_learners_general_data.remove_progress_confirm,action:"remove_user_from_post"},reset_progress:{lesson:window.woo_learners_general_data.reset_lesson_confirm,course:window.woo_learners_general_data.reset_course_confirm,action:"reset_user_post"}};if(void 0!==i[a]&&(s=i[a][o],confirm(s))){var d=jQuery(this).closest("tr");t&&n&&o&&(r+="user_id="+t,r+="&post_id="+n,r+="&post_type="+o,jQuery.post(ajaxurl,{action:i[a].action,data:r,security:window.woo_learners_general_data.modify_user_post_nonce},(function(e){if(e){if("removed"===e)return void d.fadeTo(400,0,(function(){d.remove()}));switch(a){case"reset_progress":d.find(".graded").html(window.slgL10n.inprogress).removeClass("graded").addClass("in-progress")}}})),window.sensei_log_event("learner_management_"+a))}})),jQuery("select#add_learner_search").select2({minimumInputLength:3,placeholder:window.woo_learners_general_data.selectplaceholder,width:"300px",ajax:{url:window.ajaxurl,dataType:"json",cache:!0,id:function(e){return e._id},data:function(e){return{term:e.term,page:e.page||1,action:"sensei_json_search_users",security:window.woo_learners_general_data.search_users_nonce,default:""}},processResults:function(e,r){var t=[];return jQuery.each(e,(function(e,r){jQuery.isEmptyObject(r)||t.push({id:e,text:r})})),{results:t,page:r}}}}),jQuery("#course-category-options").exists()&&jQuery("#course-category-options").select2()}))}});