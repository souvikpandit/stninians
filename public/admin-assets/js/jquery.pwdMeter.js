!function(e){e.fn.pwdMeter=function(a){return a=e.extend({minLength:6,displayGeneratePassword:!1,generatePassText:"Password Generator",generatePassClass:"GeneratePasswordLink",randomPassLength:13,passwordBox:this},a),this.each(function(e){function t(){var e=0,t=$(a.passwordBox).val();switch(t.length>0&&t.length<=5&&(e=1),t.length>=a.minLength&&e++,t.match(/[a-z]/)&&t.match(/[A-Z]/)&&e++,t.match(/\d+/)&&e++,t.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)&&e++,t.length>12&&e++,$("#pwdMeter").removeClass(),$("#pwdMeter").addClass("neutral"),e){case 1:$("#pwdMeter").addClass("veryweak"),$("#pwdMeter").text("Very Weak");break;case 2:$("#pwdMeter").addClass("weak"),$("#pwdMeter").text("Weak");break;case 3:$("#pwdMeter").addClass("medium"),$("#pwdMeter").text("Medium");break;case 4:$("#pwdMeter").addClass("strong"),$("#pwdMeter").text("Strong");break;case 5:$("#pwdMeter").addClass("verystrong"),$("#pwdMeter").text("Very Strong");break;default:$("#pwdMeter").addClass("neutral"),$("#pwdMeter").text("Very Weak")}}function s(){for(var e="0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz!?$?%^&*()_-+={[}]:;@~#|<,>.?/",t=a.randomPassLength,s="",r=0;t>r;r++){var n=Math.floor(Math.random()*e.length);s+=e.substring(n,n+1)}return s}$(this).keyup(function(){t()}),a.displayGeneratePassword&&$("#pwdMeter").after('<div class="generator"><a id="Spn_PasswordGenerator" class="'+a.generatePassClass+' btn btn-primary btn-xs">'+a.generatePassText+'</a>&nbsp;<span id="Spn_NewPassword" class="NewPassword"></span></div>'),$("#Spn_PasswordGenerator").click(function(){var e=s();$("#Spn_NewPassword").text(e),$(a.passwordBox).val(e),t()})})}}(jQuery);