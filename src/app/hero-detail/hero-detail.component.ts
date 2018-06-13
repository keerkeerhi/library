import { Component, OnInit, Input } from '@angular/core';
import {ActivatedRoute} from '@angular/router'
import {Location} from '@angular/common'
import {HeroService} from '../hero.service';

@Component({
  selector: 'app-hero-detail',
  templateUrl: './hero-detail.component.html',
  styleUrls: ['./hero-detail.component.css']
})
export class HeroDetailComponent implements OnInit {
  // @Input() hero
  hero
  constructor(private route:ActivatedRoute,private hService:HeroService,private location:Location) {
    console.log('===>',this.hero)
  }

  ngOnInit() {
    const id = this.route.snapshot.paramMap.get('id')
    this.hService.getHero(id).subscribe(res=>{
      this.hero = res
    })
  }
  goBack()
  {
    this.location.back()
  }

}
