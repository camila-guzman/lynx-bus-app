import React from 'react';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import Home from '../../screens/Home';
import { Icon } from 'react-native-elements';
import RoutesScreen from '../../screens/Routes';

function BottomNav(){
  const Tab = createBottomTabNavigator();

  return (
    <Tab.Navigator>
      <Tab.Screen name="Home" component={Home} options={{
        tabBarLabel: 'Home',
        tabBarAccessibilityLabel: 'Home',
        tabBarLabelPosition: 'below-icon',
        tabBarIcon: ({color}) => (
          <Icon name='home' type='font-awesome' color='#000'/>
        ),
       }}/>
    </Tab.Navigator>
  );
}

export default BottomNav;