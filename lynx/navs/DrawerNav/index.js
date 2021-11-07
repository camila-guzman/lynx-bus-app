import React from 'react';
import { createDrawerNavigator } from '@react-navigation/drawer';

import Home from '../../screens/Home';
import RoutesScreen from '../../screens/Routes';
import TripPlanner from '../../screens/Trip Planner';
import BusPasses from '../../screens/Bus Passes';
import Account from '../../screens/Account';
import SettingsScreen from '../../screens/Settings';
import BottomNav from '../BottomNav';
import { createStackNavigator } from '@react-navigation/stack';
import { NavigationContainer } from '@react-navigation/native';

import { Icon } from 'react-native-elements/dist/icons/Icon';

const Drawer = createDrawerNavigator();
const Stack = createStackNavigator();

function DrawerNav() {
    return (
        <Drawer.Navigator initialRouteName="Home">
            <Drawer.Screen name="Home" component={Home} options={{ 
                headerRight: (props) => {
                    <Icon name="search" 
                    type="font-awesome" 
                    color="#000"
                    onPress={() => NavigationContainer.dispatch(DrawerActions.openDrawer())} />
                }
            }}/>
            <Drawer.Screen name="Routes" component={RoutesScreen} />
            <Drawer.Screen name="Trip Planner" component={TripPlanner} />
            <Drawer.Screen name="Bus Passes" component={BusPasses} />
            <Drawer.Screen name="Account" component={Account} />
            <Drawer.Screen name="Settings" component={SettingsScreen} />
          </Drawer.Navigator>
      );
}

export default DrawerNav;