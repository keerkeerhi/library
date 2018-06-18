import {Component, OnInit} from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  config = {
    autoplay: {
      delay: 5000
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      bulletClass: 'page-index',
      bulletActiveClass: 'page-index-acv'
    },
  }

  windowH = 0;

  banners = []

  navList = []
  constructor() {
    this.windowH = this.getClientHeight();
    this.banners = [
      {img:"/assets/img/back1.jpg"},
      {img:"/assets/img/back2.jpg"},
      {img:"/assets/img/back3.jpg"},
      {img:"/assets/img/back4.jpg"}]

    this.navList = [
      {title:'首页'},
      {title:'概况'},
      {title:'党建'},
      {title:'古迹'},
      {title:'留言板'}
    ]
  }

  getClientHeight() {
    var clientHeight = 0;
    if (document.body.clientHeight && document.documentElement.clientHeight) {
      var clientHeight = (document.body.clientHeight < document.documentElement.clientHeight) ? document.body.clientHeight : document.documentElement.clientHeight;
    }
    else {
      var clientHeight = (document.body.clientHeight > document.documentElement.clientHeight) ? document.body.clientHeight : document.documentElement.clientHeight;
    }
    return clientHeight;
  }

  ngOnInit() {

  }

}
