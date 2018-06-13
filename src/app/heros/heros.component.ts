import { Component, OnInit } from '@angular/core';
import {HeroService} from '../hero.service';
import {MessageService} from '../message.service';

@Component({
  selector: 'app-heros',
  templateUrl: './heros.component.html',
  styleUrls: ['./heros.component.css']
})
export class HerosComponent implements OnInit {
  heros = []
  selectedHero
  constructor(private hService:HeroService,private mService:MessageService) { }

  ngOnInit() {
    console.log('=---==',this.hService)
    this.hService.getHeros().subscribe(res=>{
      // this.mService.add('data heros geted')
      this.heros = res;
    })
  }

  showHero(h){
    this.selectedHero = h
    this.mService.add(h.id+h.name)
    console.log('===>',h)
  }
}
