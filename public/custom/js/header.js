var nav_lis = document.getElementsByClassName('nav_li');

for (var i=0; i<nav_lis.length; i++){
  nav_lis[i].addEventListener('mouseover', function(){
    this.children[0].children[1].style.display = 'none';
    this.children[0].children[0].style.display = 'block';
    this.style.width = '90px';
    // console.log("Enter", this.children[0].children[0]);
  });

  nav_lis[i].addEventListener('mouseout', function(){
    this.children[0].children[0].style.display = 'none';
    this.children[0].children[1].style.display = 'inline-block';
    this.style.width='auto';
    // console.log("Exit", this.children[0].children[0]);
  });
}
