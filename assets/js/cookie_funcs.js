function setCookie(id, value, daysToExpiration) {
	let date = new Date();
	date.setTime(date.getTime() + (daysToExpiration*24*60*60*1000));

	let expires = "expires=" + date.toGMTString();
	document.cookie = id + "=" + value + ";" + expires + ";path=/";
}

function getCookie(id) {
	let joinedCookies = decodeURIComponent(document.cookie);
	let cookies = joinedCookies.split(';');
	let assignment = id + "=";

	for (let i = 0; i < cookies.length; i++) {
		let cookie = cookies[i];

		while (cookie.charAt(0) == ' ') {
			cookie = cookie.substring(1);
		}

		if (cookie.indexOf(assignment) == 0) {
			return cookie.substring(assignment.length, cookie.length);
		}
	}

	return "";
}

function isPresent(cookieId) {
	let result = getCookie(cookieId);

	return result != "";
}
