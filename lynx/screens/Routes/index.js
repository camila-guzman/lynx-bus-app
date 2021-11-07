import { NavigationContainer } from "@react-navigation/native";
import React from "react";
import {View, Text, Button, FlatList, SafeAreaView } from "react-native";
import { Icon } from "react-native-elements/dist/icons/Icon";
import { ListItem } from "react-native-elements";

function Filters(){
    return (
        <View>
            <Text>Filter Screen</Text>
        </View>
    );
}

const list = [
    {
        title:'Link 1:',
        subtitle:'Winter Park / Altamonte Spring / Maitland'
    },
    {
        title:'Link 3:',
        subtitle:'Lake Margaret Drive'
    },
    {
        title:'Link 6:',
        subtitle:'Dixie Bell'
    },
    {
        title:'Link 7:',
        subtitle:'S Orange Avenue / Florida Mall'
    },
    {
        title:'Link 8:',
        subtitle:'W. Oak Ridge Road / International Drive'
    },
    {
        title:'Link 9:',
        subtitle:'Winter Park / Rosemont'
    },
    {
        title:'Link 10:',
        subtitle:'E. U.S. 192 / St. Cloud'
    },
    {
        title:'Link 11:',
        subtitle:'S. Orange Avenue / Orlando International Airport'
    },
    {
        title:'Link 13:',
        subtitle:'University Boulevard / University of Central Florida'
    },
    {
        title:'Link 15:',
        subtitle:'Curry Ford Road / Valencia College Ease'
    },
    {
        title:'Link 18:',
        subtitle:'S. Orange Avenue / Kissimmee'
    },
    {
        title:'Link 20:',
        subtitle:'Malibu Street / Pine Hills'
    },
    {
        title:'Link 21:',
        subtitle:'Raliegh Street / Springs Village'
    },
    {
        title:'Link 23:',
        subtitle:'Winter Park / Springs Village'
    },
    {
        title:'Link 24:',
        subtitle:'Millenia / Vineland'
    },
    {
        title:'Link 25:',
        subtitle:'Mercy Drive / Shader Road'
    },
    {
        title:'Link 26:',
        subtitle:'Pleasant Hill Road / Poinciana'
    },
    {
        title:'Link 28:',
        subtitle:'E. Colonial Drive / Azalea Park'
    },
    {
        title:'Link 29:',
        subtitle:'E. Colonial Drive / Goldenrod Road'
    },
    {
        title:'Link 34:',
        subtitle:'N. U.S. 17-92 / Sanford'
    },
    {
        title:'Link 36:',
        subtitle:'Lake Richmond'
    },
    {
        title:'Link 37:',
        subtitle:'Pine Hills / Florida Mall'
    },
    {
        title:'Link 38:',
        subtitle:'Universal Orlando / I-Drive Express'
    },
    {
        title:'Link 40:',
        subtitle:'Americana Blvd. / Universal Orlando'
    },
    {
        title:'Link 42:',
        subtitle:'International Drive / Orlando International Airport'
    },
    {
        title:'Link 44:',
        subtitle:'Hiawassee Road / Zellwood / Apopka'
    },
    {
        title:'Link 45:',
        subtitle:'Lake Mary'
    },
    {
        title:'Link 46E:',
        subtitle:'State Road 46 / Downtown Sanford'
    },
    {
        title:'Link 46W:',
        subtitle:'State Road 46 / Seminole Towne Center'
    },
    {
        title:'Link 48:',
        subtitle:'W. Colonial Drive / Pawers Drive '
    }
]

function RoutesScreen(props){
    return (
        <View>
            <Button 
            icon={
                <Icon 
                name='options-outline'
                size='{33}'
                color='#000'
                type='ionicon'
                />
            }
            title="Filters"
            onPress={() => props.navigation.navigate('Filters')}
            />
            <View>
            {    
            list.map((item, i) => (      
            <ListItem key={i} bottomDivider>        
            <Icon name={item.icon} />       
             <ListItem.Content>          
                 <ListItem.Title>{item.title}</ListItem.Title>   
                 <ListItem.Subtitle>{i.subtitle}</ListItem.Subtitle>     
                 </ListItem.Content>        
                 <ListItem.Chevron />      
                 </ListItem>    
                ))  
            }
            </View>
        </View>
    );
}

export default RoutesScreen;