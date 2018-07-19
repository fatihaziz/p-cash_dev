            <table id="mytable" class="table table-striped table-bordered wrap" style="width:100%;
            margin: 2em 0 !important;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Occupation</th>
                        <th>Description</th>
                        <th>SocialId</th>
                        <th>SocialType</th>
                        <th>Type</th>
                        <th>MetaHost</th>
                        <th>MetaLogin</th>
                        <th>metaInvestorPassword</th>
                        <th>MetaInfo</th>
                        <th>FollowInfo</th>
                        <th>Status</th>
                        <th>Identity</th>
                        <th>POA</th>
                        <th>CreatedAt</th>
                        <th>UpdatedAt</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->username }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->phone }}</td>
                        <td>{{ $d->occupation }}</td>
                        <td>{{ $d->description }}</td>
                        <td>{{ $d->socialId }}</td>
                        <td>{{ $d->socialType }}</td>
                        <td>{{ $d->type }}</td>
                        <td>{{ $d->metaHost }}</td>
                        <td>{{ $d->metaLogin }}</td>
                        <td>{{ $d->metaInvestorPassword }}</td>
                        <td>{{ $d->metaInfo }}</td>
                        <td>{{ $d->followInfo }}</td>
                        <td>{{ $d->status }}</td>
                        <td><?php 
                            
                                $userIdentity = App\Identity
                                                ::where('userId',$d->id)
                                                ->where('type','IDENTITY')
                                                ->get();
                            ?>
                            @foreach($userIdentity as $ui)
                                <img src="{{ $ui->value }}" alt="Identitas">    
                            @endforeach
                        </td>                   
                        <td><?php 
                            
                            $userPOA = App\Identity
                                            ::where('userId',$d->id)
                                            ->where('type','POA')
                                            ->get();
                            ?>
                            @foreach($userPOA as $up)
                                <img src="{{ $up->value }}" alt="POA">
                            @endforeach
                        </td>
                        <td>{{ $d->createdAt }}</td>
                        <td>{{ $d->updatedAt }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>