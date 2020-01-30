import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {
  users = [];
  submitted = false;
  registerForm: FormGroup;


  constructor(private apiService: ApiService, private formBuilder: FormBuilder) { }
  ngOnInit() {
    this.registerForm = this.formBuilder.group({
      title: ['', Validators.required],
    });

    console.log('init home');
    this.apiService.get().subscribe((data: any[]) => {
      console.log(data);
      this.users = data;
    } );
  }
  onSubmit(id) {
    this.submitted = true;
    this.apiService.setRole(id, this.registerForm.get('role').value);
  }
}
