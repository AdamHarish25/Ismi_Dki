(function ( $ ) {
  $.fn.multiStepForm = function(args) {
      if(args === null || typeof args !== 'object' || $.isArray(args))
        throw  " : Called with Invalid argument";
      var form = this;
      var tabs = form.find('.tab');
      var steps = form.find('.step');
      var tab1 = form.find('.tab1');
      var tab2 = form.find('.tab2');
      var nav1 = $('.nav1');
      var nav2 = $('.nav2');
      $(nav1).prop('disabled', true);
      $(nav2).prop('disabled', true);
      steps.each(function(i, e){
        $(e).on('click', function(ev){
        });
      });
      tab2.addClass("hidden");
      tab1.removeClass("hidden");
      form.navigateTo = function (i) {/*index*/
        /*Mark the current section with the class 'current'*/
        tabs.removeClass('current').eq(i).addClass('current');
        // Show only the navigation buttons that make sense for the current section:
        form.find('.previous').toggle(i > 0);
        atTheEnd = i >= tabs.length - 1;
        form.find('.next').toggle(!atTheEnd);
        // console.log('atTheEnd='+atTheEnd);
        form.find('.submit').toggle(atTheEnd);
        fixStepIndicator(curIndex());
        return form;
      }
      function curIndex() {
        /*Return the current index by looking at which section has the class 'current'*/
        return tabs.index(tabs.filter('.current'));
      }
      function fixStepIndicator(n) {
        steps.each(function(i, e){
          i == n ? $(e).addClass('active') : $(e).removeClass('active');
        });
      }
      /* Previous button is easy, just go back */
      form.find('.previous').click(function() {
        form.navigateTo(curIndex() - 1);
      });

      /* Next button goes forward iff current block validates */
      form.find('.next').click(function() {
        // if('validations' in args && typeof args.validations === 'object' && !$.isArray(args.validations)){
        //   if(!('noValidate' in args) || (typeof args.noValidate === 'boolean' && !args.noValidate)){
        //     form.validate(args.validations);
        //     if(form.valid() == true){
        //       form.navigateTo(curIndex() + 1);
        //       return true;
        //     }
        //     return false;
        //   }
        // }
        tab2.removeClass("hidden");
        form.navigateTo(curIndex() + 1);
        nav1.removeClass("active");
        nav2.addClass("active");
        $(nav1).attr('aria-selected', false);
        $(nav2).attr('aria-selected', true);
        $(nav1).prop('disabled', false);
        $(nav2).prop('disabled', false);
      });

      $(nav1).on("click", function() {
        tab1.removeClass("hidden");
        form.navigateTo(curIndex() - 1);
        tab2.addClass("hidden");
      })

      $(nav2).on("click", function() {
        tab1.addClass("hidden");
        form.navigateTo(curIndex() + 1);
        tab2.removeClass("hidden");
      })


      form.find('.submit').on('click', function(e){
        if(typeof args.beforeSubmit !== 'undefined' && typeof args.beforeSubmit !== 'function')
          args.beforeSubmit(form, this);
        /*check if args.submit is set false if not then form.submit is not gonna run, if not set then will run by default*/        
        if(typeof args.submit === 'undefined' || (typeof args.submit === 'boolean' && args.submit)){
          form.submit();
        }
        return form;
      });
      /*By default navigate to the tab 0, if it is being set using defaultStep property*/
      typeof args.defaultStep === 'number' ? form.navigateTo(args.defaultStep) : null;

      form.noValidate = function() {
        
      }
      return form;
  };
}( jQuery ));