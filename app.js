var app = angular.module("app", ["xeditable"]);

app.run(function(editableOptions) {
  editableOptions.theme = 'bs3'; // bootstrap3 theme. Can be also 'bs2', 'default'
});

app.controller('Control', function($scope) {
$scope.user = {
 name: 'status1',
 address: 'status2'
  };  
});

app.controller('Ctrl', function($scope) {
$scope.pTag = {
first: 'Dementia or Old Age? ',  
second: ' Wednesday, April 8  |  3 to 4 pm XXXXXXXXX',  
third: 'Is forgetting a name or where you left your keys a sign of dementia? Learn what’s normal and what’s not, and how lifestyle changes can help lower your risk for dementia.',  
fourth: 'Join us at your Zephyrhills Guidance Center for this in-person Humana Active Outlook webinar. Sign up today by calling (813) 780-7300 (TTY:711).',  
fifth: 'This presentation is for Humana members only. Please bring your Humana ID card to present.', 
sixth: ' Can’t attend in person at the Guidance Center? Attend at home online.',  
seventh: ' April 7 10 am and 2 pm',  
eighth: ' April 8, 11 am and 3 pm', 
ninth: ' Click here to register if joining from home.',  
tenth: 'Your Zephyrhills Guidance Center is here to help you live a healthier, happier life through fitness classes, health and wellness seminars, social activities, and more - at no additional cost to you.',  
eleventh: ' If you dont want us to contact you by email, you can  unsubscribe from our online community. For more information about Humana coverage or the company providing these benefits, please visit  Humana.com.  ',  
twelfth: 'Humana is a Medicare Advantage organization with a Medicare contract. Enrollment in a Humana plan depends on contract renewal. The program(s) and services(s) described is/are not insurance and is/are neither contractually offered nor guaranteed under Humana  insurance policies. They may be provided by a third party, discontinued at any time, and are subject to geographic availability.   ',  
thirteenth: ' Information provided at Guidance Center events is for educational purposes only. It should not be considered specific medical advice as each individual circumstance is different.  Should you feel the need for medical advice, consult your primary care provider. ',  
fourteenth: '  Humana  <BR>500 West Main Street<BR> Louisville, KY 40202 ',  
 fifteenth: 'GHHJ5JSEN_2'
  };  
});
