import { Injectable } from '@angular/core';
import {of} from 'rxjs'
import {MessageService} from './message.service';

@Injectable({
  providedIn: 'root'
})
export class HeroService {
  private heroesUrl = 'api/heroes';  // URL to web api
  heros = [{
    id: 1,
    age: 33,
    name: '小花'
  },{
    id: 2,
    age: 33,
    name: '小花'
  },{
    id: 3,
    age: 33,
    name: '小花'
  },{
    id: 4,
    age: 33,
    name: '小花'
  },{
    id: 5,
    age: 33,
    name: '小花'
  },{
    id: 6,
    age: 33,
    name: '小花'
  }]
  constructor(private mService:MessageService) { }

  getHeros(){
    this.mService.add('data heros geted')
    return of(this.heros)
  }

  getHero(id){
    return of(this.heros.find(it=>it.id==id))
  }
}
