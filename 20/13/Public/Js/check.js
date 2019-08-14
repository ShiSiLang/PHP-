    function chkinput(form)
	{
	    if (form.user.value==''){
		    alert('请输入用户名！');
			form.user.focus();
			return false;
		}
		
	    if (form.pass.value==''){
		    alert('请输入注册密码！');
			form.pass.focus();
			return false;
		}		
		if (form.validatorCode.value==''){
		    alert('请输入验证码！');
			form.validatorCode.focus();
			return false;
		}
		return true;
	
	}
