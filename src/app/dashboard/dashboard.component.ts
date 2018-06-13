import { Component, OnInit } from '@angular/core';
import {HeroService} from '../hero.service';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {
  heroList
  constructor(private hService:HeroService) { }

  ngOnInit() {
    this.hService.getHeros().subscribe(res=>{
      this.heroList =res
    })
  }

}
