 <div class="task">
                        <div class="title">
                          <input type="checkbox" onchange="taskUpdate(this)" data-id="{{$data['id']}}"   
                                @if($data && $data['is_done'])
                                    checked
                                @endif
                          />
                          <div class="task_title">{{$data['title'] ?? ''}}</div>
                        </div>
                        <div class="priority">
                          <div class="sphere"></div>
                          <h6>{{$data['category']->title ?? ''}}</h6>
                        </div>
                        <div class="actions">
                          <a href="{{route('tasks.edit', ['id' => $data['id']])}}">
                            <img src="/assets/images/icon-edit.png">
                          </a>  
                          <a href="{{route('tasks.delete', ['id' => $data['id']])}}">
                            <img src="/assets/images/icon-delete.png">
                          </a>
                        </div>
 </div>