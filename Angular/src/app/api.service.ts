import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  private SERVER_URL = 'http://rest-api.local';

  constructor(private httpClient: HttpClient) { }

  public get() {
      return this.httpClient.get(this.SERVER_URL + '/users');
  }

  public setRole(user, role) {
      return this.httpClient.patch(this.SERVER_URL + '/users/' + user , role);
  }
}
